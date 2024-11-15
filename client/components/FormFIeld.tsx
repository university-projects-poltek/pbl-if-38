import React, { useState } from "react";
import {
  Image,
  StyleSheet,
  Text,
  TextInput,
  TouchableOpacity,
  View,
} from "react-native";

// assets
import { icons } from "@/constants";

interface Props {
  title?: string;
  value?: string;
  type?: "password" | "text";
  placeHolder?: string;
  handlerChangeText?: any;
}

const FormField = ({
  title,
  value,
  placeHolder,
  handlerChangeText,
  type,
}: Props) => {
  const [showPassword, setShowPassword] = useState(false);
  const [isFocused, setIsFocused] = useState(false);

  return (
    <View
      style={{
        marginTop: 8,
      }}
    >
      {title && (
        <Text
          style={{
            color: "#CDCDE0",
            fontFamily: "Poppins-Medium",
            marginBottom: 10,
          }}
        >
          {title}
        </Text>
      )}

      <View
        style={[styles.textInputContainer, isFocused && styles.focusedBorder]}
      >
        <TextInput
          value={value}
          placeholder={placeHolder}
          placeholderTextColor="#D1D3D8"
          onChangeText={handlerChangeText}
          secureTextEntry={type === "password" && !showPassword}
          onFocus={() => setIsFocused(true)}
          onBlur={() => setIsFocused(false)}
          style={{
            color: "#fff",
            flex: 1,
          }}
        />

        {type === "password" && (
          <TouchableOpacity onPress={() => setShowPassword(!showPassword)}>
            <Image
              // source={showPassword ? icons.eyeHide : icons.eye}
              style={{ width: 20, height: 20 }}
              resizeMode="contain"
            />
          </TouchableOpacity>
        )}
      </View>
    </View>
  );
};

export default FormField;

const styles = StyleSheet.create({
  textInputContainer: {
    borderWidth: 2,
    borderColor: "#ccc",
    borderRadius: 10,
    width: "100%",
    height: 43,
    backgroundColor: "#fff",
    alignItems: "center",
    paddingHorizontal: 20,
    flexDirection: "row",
  },
  focusedBorder: {
    borderColor: "#125491",
  },
});
