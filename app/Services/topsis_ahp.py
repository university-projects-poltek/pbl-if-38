# Impor pustaka yang diperlukan
from sqlalchemy import create_engine
import pandas as pd
import numpy as np
from sklearn.preprocessing import MinMaxScaler

# Koneksi ke database
engine = create_engine('mysql+pymysql://root:@localhost/db_lapor_park')

# Ambil data dari tabel reports
df = pd.read_sql("SELECT id, impact, area, vehicle_type, weather FROM reports WHERE status = 'Diterima'", engine)

# 1. Bobot Kriteria dengan AHP
if df.empty:
    print("Tidak ada laporan dengan status 'Diterima' untuk diproses.")
else:
    # 1. Bobot Kriteria dengan AHP
    ahp_matrix = np.array([
        [1,   3,   5,   7],  # Dampak
        [1/3, 1,   3,   5],  # Tipe Area
        [1/5, 1/3, 1,   3],  # Tipe Kendaraan
        [1/7, 1/5, 1/3, 1]   # Cuaca
    ])

# Normalisasi matriks AHP
ahp_normalized = ahp_matrix / ahp_matrix.sum(axis=0)

# Menghitung bobot (rata-rata baris)
ahp_weights = ahp_normalized.mean(axis=1)
print("Bobot AHP untuk setiap kriteria:", ahp_weights)

# 2. Normalisasi Data Alternatif untuk TOPSIS
bobot_dampak = {'Kritis': 0.4, 'Tinggi': 0.3, 'Sedang': 0.2, 'Rendah': 0.1}
bobot_area = {'Komersial': 0.3, 'Industri': 0.25, 'Publik': 0.25, 'Perumahan': 0.2}
bobot_kendaraan = {'Truk': 0.4, 'Bus': 0.3, 'Mobil': 0.2, 'Motor': 0.1}
bobot_cuaca = {'Badai': 0.3, 'Hujan': 0.25, 'Cerah': 0.25, 'Berawan': 0.2}

# Tambahkan kolom bobot ke dalam DataFrame
df['Bobot Dampak'] = df['impact'].map(bobot_dampak)
df['Bobot Tipe Area'] = df['area'].map(bobot_area)
df['Bobot Tipe Kendaraan'] = df['vehicle_type'].map(bobot_kendaraan)
df['Bobot Cuaca'] = df['weather'].map(bobot_cuaca) ### **Penamaan yang Harus Sesuai dengan Database**

# Debug: Cek data awal
print("Data awal:", df[['id', 'Bobot Dampak', 'Bobot Tipe Area', 'Bobot Tipe Kendaraan', 'Bobot Cuaca']])

# Pilih kolom numerik untuk TOPSIS
topsis_data = df[['Bobot Dampak', 'Bobot Tipe Area', 'Bobot Tipe Kendaraan', 'Bobot Cuaca']].values

# Normalisasi data
scaler = MinMaxScaler()
topsis_normalized = scaler.fit_transform(topsis_data)
# topsis_normalized = topsis_data / np.sqrt((topsis_data**2).sum(axis=0))

# Debug: Cek data normalisasi
print("Data setelah normalisasi:", topsis_normalized)

# 3. Mengalikan Normalisasi dengan Bobot AHP
topsis_weighted = topsis_normalized * ahp_weights

# Debug: Cek data TOPSIS setelah diberi bobot
print("Topsis Weighted Data:", topsis_weighted)

# 4. Hitung Solusi Ideal dan Anti-Ideal
ideal_solution = topsis_weighted.max(axis=0)   # Solusi ideal (terbaik)
anti_ideal_solution = topsis_weighted.min(axis=0)  # Solusi anti-ideal (terburuk)

# 5. Hitung Jarak ke Solusi Ideal dan Anti-Ideal
distance_to_ideal = np.sqrt(((topsis_weighted - ideal_solution)**2).sum(axis=1))
distance_to_anti_ideal = np.sqrt(((topsis_weighted - anti_ideal_solution)**2).sum(axis=1))

# Debug: Cek jarak ke solusi
print("Distance to Ideal:", distance_to_ideal)
print("Distance to Anti-Ideal:", distance_to_anti_ideal)

# 6. Hitung Skor TOPSIS
# topsis_scores = distance_to_anti_ideal / (distance_to_ideal + distance_to_anti_ideal)
topsis_scores = (distance_to_anti_ideal + 1e-6) / (distance_to_ideal + distance_to_anti_ideal + 1e-6)

# Debug: Cek skor TOPSIS
print("Topsis Scores:", topsis_scores)

# Tambahkan skor TOPSIS ke DataFrame
df['topsis_score'] = topsis_scores
df['priority'] = df['topsis_score'].apply(
        lambda x: 'Sangat Urgent' if x > 0.8 else ('Urgent' if x > 0.5 else 'Tidak Urgent')
    )

# Debug: Periksa data sebelum menyimpan
print("Data final dengan prioritas:", df[['id', 'topsis_score', 'priority']])
# 7. Menyimpan Hasil ke Database prioritized_result
# Pilih kolom yang ingin disimpan
results_to_save = df[['id', 'topsis_score', 'priority']].copy()
results_to_save.rename(columns={'id': 'report_id'}, inplace=True)

# Simpan hasil ke tabel prioritized_result
results_to_save.to_sql('prioritized_results', engine, if_exists='append', index=False)

print("Hasil telah disimpan ke dalam tabel prioritized_result.")