import { icons } from "@/constants";

import { Link, router } from "expo-router";

import { FormField } from "@/components";
import PrimaryButton from "@/components/PrimaryButton";
import { Image, SafeAreaView, Text, View } from "react-native";

export default function SignUp() {
  return (
    <SafeAreaView
      style={{
        flex: 1,
        justifyContent: "center",
        paddingHorizontal: 40,
        gap: 10,
        backgroundColor: "white",
      }}
    >
      <Image
        source={icons.LogoPark}
        style={{
          marginHorizontal: "auto",
          width: 80,
          height: 80,
        }}
      />
      <Text
        style={{
          textAlign: "center",
          fontSize: 24,
          fontWeight: 700,
        }}
      >
        Buat akun dahulu
      </Text>

      <FormField placeHolder="Username" type="text" />
      <FormField placeHolder="Email" type="text" />
      <FormField placeHolder="Password" type="password" />
      <FormField placeHolder="Re-Password" type="password" />

      <PrimaryButton
        title="Daftar"
        handlerPress={() => router.push("/sign-up")}
      />

      <View
        style={{
          flexDirection: "row",
          gap: 5,
        }}
      >
        <Text
          style={{
            fontSize: 14,
            fontWeight: 700,
            color: "#333",
          }}
        >
          Sudah punya akun?
        </Text>
        <Link
          href="/sign-in"
          style={{
            fontSize: 14,
            fontWeight: 700,
            color: "#125491",
          }}
        >
          Masuk
        </Link>
      </View>
    </SafeAreaView>
  );
}
