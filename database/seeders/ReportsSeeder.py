import pandas as pd
import numpy as np
from sqlalchemy import create_engine

# Buat koneksi ke database
engine = create_engine('mysql+pymysql://root:@localhost/db_lapor_park')

# Buat DataFrame untuk menyimpan data
data = pd.DataFrame({
    'photo': np.random.choice(['foto1.jpg', 'foto2.jpg', 'foto3.jpg', 'foto4.jpg'], size=100),
    'location': np.random.choice(['Jakarta', 'Bandung', 'Surabaya', 'Batam'], size=100),
    'description': np.random.choice(['Laporan kejadian di Jakarta', 'Laporan kejadian di Bandung', 'Laporan kejadian di Surabaya', 'Laporan kejadian di Batam'], size=100),
    'impact': np.random.choice(['Kritis', 'Tinggi', 'Sedang', 'Rendah'], size=100),
    'vehicle_type': np.random.choice(['Mobil', 'Motor', 'Truk', 'Bus'], size=100),
    'area': np.random.choice(['Komersial', 'Industri', 'Publik', 'Perumahan'], size=100),
    'weather': np.random.choice(['Cerah', 'Hujan', 'Badai', 'Berawan'], size=100),
    'report_date': pd.date_range(start='2023-10-01', periods=100),
    'status': ['Diterima'] * 100
})

# Simpan data ke tabel reports
data.to_sql('reports', engine, if_exists='append', index=False)

print("Data telah disimpan ke dalam tabel reports.")