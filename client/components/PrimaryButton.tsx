import React from "react";

import {
  ActivityIndicator,
  StyleSheet,
  Text,
  TouchableOpacity,
} from "react-native";

interface PropsType {
  title: string;
  handlerPress?: () => void;
  isLoading?: boolean;
  otherStyle?: any;
}

const PrimaryButton = ({
  title,
  isLoading,
  handlerPress,
  otherStyle,
}: PropsType) => {
  return (
    <TouchableOpacity
      style={[styles.btnPrimary, otherStyle]}
      onPress={handlerPress}
      disabled={isLoading}
      activeOpacity={0.7}
    >
      <Text
        style={{
          fontWeight: 700,
          fontSize: 16,
          textAlign: "center",
          color: "#fff",
        }}
      >
        {isLoading ? (
          <ActivityIndicator animating={isLoading} color="#fff" size="small" />
        ) : (
          title
        )}
      </Text>
    </TouchableOpacity>
  );
};

export default PrimaryButton;

const styles = StyleSheet.create({
  btnPrimary: {
    backgroundColor: "#125491",
    paddingVertical: 12,
    paddingHorizontal: 100,
    borderRadius: 8,
  },
});
