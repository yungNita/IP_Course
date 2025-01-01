<template>
  <div class="messageBox">
    <label class="messageLine1" v-if="message">
      Message from Page {{ currentPage }}: {{ message }}
    </label>
    <div class="hehe">
      <label class="messageLine">Message:</label>
      <input
        type="text"
        class="boxes"
        v-model="newMessage"
        @input="updateMessage" />
    </div>
  </div>
</template>

<script>
import { store } from "@/stores/store";

export default {
  props: ["currentPage"],

  computed: {
    message() {
      return store.getMessage(this.currentPage); // Get the current message for this page
    },
  },

  data() {
    return {
      newMessage: store.getMessage(this.currentPage) || "",
    };
  },

  methods: {
    updateMessage() {
      store.setMessage(this.currentPage, this.newMessage); // Update global state
    },
  },
};
</script>

<style scoped>
.messageBox {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  height: 100%;
  margin-top: 10px;
}
.messageLine1 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  margin-left: -5.8rem;
}
.hehe {
  display: flex;
  margin-top: 10px;
}
.messageLine {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  margin-top: 27px;
  margin-right: 10px;
}
.boxes {
  font-size: 18px;
  margin-bottom: 30px;
  margin-top: 10px;
  border: 1px solid black;
  width: 27vw;
  height: 9vh;
  text-align: center;
  padding: 0 10px;
}
</style>
