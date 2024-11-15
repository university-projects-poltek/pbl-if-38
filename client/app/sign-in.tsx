import { icons } from "@/constants";

import { Link, router } from "expo-router";

import { FormField } from "@/components";
import PrimaryButton from "@/components/PrimaryButton";
import { Image, SafeAreaView, Text, View } from "react-native";

export default function SignIn() {
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
        Selamat datang👋
      </Text>

      <FormField placeHolder="Username" />
      <FormField placeHolder="Password" />

      <PrimaryButton
        title="Masuk"
        handlerPress={() => router.push("/sign-in")}
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
          Belom punya akun?
        </Text>
        <Link
          href="/sign-up"
          style={{
            fontSize: 14,
            fontWeight: 700,
            color: "#125491",
          }}
        >
          Sign Up
        </Link>
      </View>
    </SafeAreaView>
  );
}
