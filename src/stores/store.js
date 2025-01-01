import { reactive } from "vue";

export const store = reactive({
  messages: {
    1: "", // Message for Page 1
    2: "", // Message for Page 2
    3: "", // Message for Page 3
  },
  setMessage(page, message) {
    this.messages[page] = message;
  },
  getMessage(page) {
    return this.messages[page];
  },
});
