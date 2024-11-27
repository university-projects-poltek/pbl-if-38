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

const SecondaryButton = ({
  title,
  isLoading,
  handlerPress,
  otherStyle,
}: PropsType) => {
  return (
    <TouchableOpacity
      style={[styles.btnSecondary, otherStyle]}
      onPress={handlerPress}
      disabled={isLoading}
      activeOpacity={0.7}
    >
      <Text
        style={{
          fontWeight: 700,
          fontSize: 16,
          textAlign: "center",
          color: "#125491",
        }}
      >
        {isLoading ? (
          <ActivityIndicator
            animating={isLoading}
            color="#125491"
            size="small"
          />
        ) : (
          title
        )}
      </Text>
    </TouchableOpacity>
  );
};

export default SecondaryButton;

const styles = StyleSheet.create({
  btnSecondary: {
    borderColor: "#125491",
    paddingVertical: 12,
    borderRadius: 8,
    marginVertical: 10,
    borderWidth: 2,
  },
});
