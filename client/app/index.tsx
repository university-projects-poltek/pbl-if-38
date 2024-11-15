import PrimaryButton from "@/components/PrimaryButton";
import { Image, SafeAreaView, Text, View } from "react-native";

import { icons, images } from "@/constants";
import { router } from "expo-router";

export default function Homepage() {
  return (
    <SafeAreaView
      style={{
        flex: 1,
        justifyContent: "center",
        paddingHorizontal: 40,
        gap: 20,
        backgroundColor: "white",
      }}
    >
      <View>
        <Image
          source={icons.LogoPark}
          style={{
            marginHorizontal: "auto",
            width: 60,
            height: 60,
          }}
        />
        <Text
          style={{
            textAlign: "center",
            fontSize: 24,
            fontWeight: 700,
          }}
        >
          LaporPark
        </Text>
      </View>

      <Image
        source={images.onBoardIllustration}
        style={{
          marginHorizontal: "auto",
        }}
      />

      <View>
        <Text
          style={{
            textAlign: "center",
            fontSize: 14,
            fontWeight: 300,
            color: "#97A2AD",
          }}
        >
          Tantangan Perkotaan yang Membutuhkan Solusi, Upaya
        </Text>
        <Text
          style={{
            textAlign: "center",
            fontSize: 14,
            fontWeight: 300,
            color: "#97A2AD",
          }}
        >
          Bersama untuk Ketertiban dan Kenyamanan Bersama
        </Text>
      </View>
      <PrimaryButton
        title="Masuk"
        handlerPress={() => router.push("/sign-in")}
      />
    </SafeAreaView>
  );
}
