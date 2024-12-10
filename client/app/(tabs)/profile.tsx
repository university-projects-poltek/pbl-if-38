import { SecondaryButton } from "@/components/buttons";
import { router } from "expo-router";
import React from "react";
import { Image, StyleSheet, Text, TouchableOpacity, View } from "react-native";

const Profile = () => {
  return (
    <View
      style={{
        flex: 1,
        backgroundColor: "#fff",
        paddingHorizontal: 25,
        justifyContent: "space-around",
      }}
    >
      <View>
        <View style={{ alignItems: "center", marginTop: 20 }}>
          <Image
            source={{
              uri: "https://via.placeholder.com/100",
            }}
            style={{
              width: 100,
              height: 100,
              borderRadius: 50,
              backgroundColor: "wheat",
            }}
          />
          <Text style={{ marginTop: 10, fontSize: 18, fontWeight: "bold" }}>
            Your name
          </Text>
          <Text style={{ marginTop: 5, fontSize: 14, color: "#666" }}>
            yourname@gmail.com
          </Text>
        </View>

        <View style={{ marginTop: 30 }}>
          {[
            { label: "Name", value: "Your name" },
            { label: "Mobile Number", value: "Add number" },
            { label: "Email Account", value: "yourname@gmail.com" },
          ].map((item, index) => (
            <View
              key={index}
              style={{
                flexDirection: "row",
                justifyContent: "space-between",
                // borderBottomWidth: 1,
                // borderBottomColor: "#DDD",
                paddingVertical: 12,
              }}
            >
              <Text style={{ fontSize: 16, color: "#333" }}>{item.label}</Text>
              <Text style={{ fontSize: 16, color: "#666" }}>{item.value}</Text>
            </View>
          ))}
        </View>
      </View>

      <View style={{ marginTop: 40 }}>
        <SecondaryButton
          title="logout"
          handlerPress={() => router.push("/sign-in")}
        />
      </View>
    </View>
  );
};

export default Profile;
