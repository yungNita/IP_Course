<template>
  <div class="app">

    <div class="CategorySection">
      <Category_Component
        v-for="Category_Component in Category_Components"
        :key="Category_Component.title + Category_Component.itemCount"
        :title="Category_Component.title"
        :itemCount="Category_Component.itemCount"
        :image="Category_Component.image"
        :background="Category_Component.background"
      ></Category_Component>
    </div>

    <div class="Promotion1Section">
      <div
        v-for="Promotion1_Component in Promotion1_Components"
        :key="Promotion1_Component.title"
        class="promotion-wrapper"
      >
        
        <Promotion1_Component
          :title="Promotion1_Component.title"
          :background="Promotion1_Component.background"
          :image="Promotion1_Component.image"
        ></Promotion1_Component>

        
        <Button_Component
          class="overlay-button"
          :buttonColor="Promotion1_Component.buttonColor"
        ></Button_Component>
      </div>
    </div>
  </div>
</template>


<script>
import Category_Component from "./components/Category_Component.vue";
import Promotion1_Component from "./components/Promotion1_Component.vue";
import Button_Component from "./components/Button_Component.vue";

export default {
  name: "App",
  components: {
    Category_Component,
    Promotion1_Component,
    Button_Component,
  },

  data() {
    return {
      Category_Components: [
        { title: "Cake & Milk", itemCount: 14, image: "https://s3-alpha-sig.figma.com/img/8370/e915/8a586f746c0b10b70cd405c8aa1f2038?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=klY1bSbqTYtPAt89LpO6qIqv5D6lDBcSSDrw5kMm4gBn76QqRDcvM813f5OKvoBeePm7LQM~KKNTpAs6v5gqA0X~gGPwcAyfP0DvE7go9lJ9BJ8QitjYAs7YXA~TLM5upwGaIzQgbWrxwQuax5IveNUiWPiZiE7h9t0nZ5nzCIIKPtvfDTM5tonJ0wLoHjvuZSviL6jv1hB7RSoFTj3rraRJ42P3wh7efQwx2sPtp3lFcIlBe6JFl5B9olkV5wWZm9AbwhaFQ8oS8HDtYntAdzynTfgxv6w~B48x4g9KUhp8mKSMBAj5mNZ874BrhdS43I4-26pWpHgQdNDyoOuRuA__", background: "#81B13D" },
        { title: "Peach", itemCount: 17, image: "https://s3-alpha-sig.figma.com/img/fa19/6bce/6720167ebdfcf5d3f8a2d76053176f9a?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Ui5~Jmp6W35w1R9FaFSHk9iU2hA3cp25vrMjx~BUCqRpOaMEVuMCTE8JUi9TU7wB1lfwZxvLZZwwJbvpNfADPKsniCVRS65hFPv7vQIuERjOYevwPdfkA3S4dpsMqUqmU6Va6ZWupyxlxeWDa3ksyLVo1VKG-YUcKOup0szBiyKGP5Qdj8-ExHN36dPRMDd8pcL~M0XTxNVSFjAeVXHwEvcL8LZ8zki62X0OnUo668RxllEVnjB3~B42EbJj9c0t2ulEitWzKNoi~i62807eS67HsYzeH8NjIo0lWR6YN3mj-KLPAgzK6hUTDrw8VzYMC9Z4EeSJZCE1LQFkOxpPAw__", background: "#FFFCEB" },
        { title: "Organic Kiwi", itemCount: 21, image: "https://s3-alpha-sig.figma.com/img/eb0a/46d6/bf3d30616b8cd69f4b03064fe254350c?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ag7NL4mHH31DRfjavBiG3u2lkuIEiEQ7BrFQ8zw2J1srDtMsj-RUljOzpeFo24XdXcPFhyhna6d9fd~kgjvvM0nSvZMuQOwoGUeUL3UGDkUnOknv2uXTuAOe4Gtjgj8ECFKd1dsWIKovgoVO-kXJ~dEWWkW5KJCKWikLSNA5TUw7BJ66ndtH2PTuhjG26LtaFtksVKfF8iuidCZSid6~Ibn7aLIIh59dtnS0POZSNRWUb-q6ijrQPlw2A9Qhgj99ju-koirfqn59lq73c8MpeBH8If87wHiJ07baj~ES-zbUnJMS3GDNiC7tQxpi3KMci3QvZMiUVRH2wDAG28Yhxw__", background: "#ECFFEC" },
        { title: "Red Apple", itemCount: 68, image: "https://s3-alpha-sig.figma.com/img/21b6/3a1e/f2a493eea176934bcab372692ab59a29?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=BTgZgPhI-lH5lQQbVs-vMxmxE4obdsXUPt7lL5fHRpJujoj5o02J6l8AYnpVMgZCwaXu2EgF4fatt7O3fe7k7AEmm4l3NBBNv92XRH6LlORulsndA6ZW7QMP7j~aZB7pJ~FDZ7p~VU4YbP3rll74iRmVxAJmf0rN4v~fo1M7qaN~t7b3ZKS8oFw2PadpnpZmtVHoQaiXI3T09icslUuNBxq1xuZxl-fLxfKTnAOJAkScyycEZdArqecyyqGSH90EwptH1gni2f9nMAUb9nwHqwZlsF6cS8hQE~p9OZCvzGRLigSK53FPTHa5pYkiVPe9VOi-Tq5~MDefxDGA61NgLg__", background: "#FEEFEA" },
        { title: "Snack", itemCount: 34, image: "https://s3-alpha-sig.figma.com/img/488c/b40d/98f6efd89c2347f8ab7f23b7757a7e2f?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=dn2H6kJU8YzRM71-npFny6lg17rUXCDhwa~MECf5fZc6Zo6ZhFoaoe~Ieb0fSEnva~7VBSfMfpUK7upjV5ug97LKJuH6PSYAFwdUyKbvy5Mz1ZwXA7ovJX9xfRN4-w~DqxcO959MCDW7SsRdo8ytoJfWdC5Dqo~3JRRfGV8mEuKUdvkqjAL9uv2R1z~9693n7rFGWyDh9bCIxOBEcIahYyjfXUUpKJpRFvgUqgBAEy6Hg3Ya8IiPkVt-5D9xYqfTgHn3U8YI9Xk-PohNRq-wfUX3nHD11mBSE-YYtuG8IR-XkdbJL5HMyPS7GEGRyB8vh9Ff~2G-5dRk0gItpmrVfA__", background: "#FFF3EB" },
        { title: "Black Plum", itemCount: 25, image: "https://s3-alpha-sig.figma.com/img/13f9/afc8/02816b515e817bcd88800c49b947f860?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=NQFwzFfSR5D7V9LchtpVgcwmdDo16UoM-2y1-CI7jMO8~MyQepVlPU7SG-KLXejdJ9VAYhZyp3yOV4G2X5dU59p3Pavh48nv16~B-4xKWWc-Jm6uSOxFAn8~ug4cScEG3Zan577AWyegQnLQl8M-0RHm2xpX1nFNuLhLh8gVb~UNIAwvxzmn7GWHLy0zyj5FPGreKu5i0nYNAgBhfg7-TMsEO~BAaitngfuvn0blJQDS9x0ipwq1feefq5Ev8TEvYYnSckLUh8J-nwNQymVzOuboVTIgj2hJT4Obe1blW1hTxpU6wDnOF5tdm5MHLAFgRsoWTB9kkNvN~2ndRrzF6Q__", background: "#FFF3FF" },
        { title: "Vegetables", itemCount: 65, image: "https://s3-alpha-sig.figma.com/img/5e6d/35bc/cc6f73e5412576546dca6b013f4fc9c7?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=EHX34r9OGiCjNzbGGhxm2Y5pTxFjD7MZDZfdRv3ZdUT4aFBf93Bp4lt27tMsS83pRVzx--oLCHM--fSNGV8cMb6-c5fPSNvPCv-CFWSqnrZrltgNCkdMMPwTQIX2j45dWodE4UWBuk7Lubsdl1R-hqvCN9Hl0PNniu5ETjEUusorf2FYugX1dBVs45ngu8GEd-UZKtNmn769ClC2-PdfmGQI17jRiBKnqtrPzYZMXIN1iVuFxbs5Rm1J2UglUTnmfGAphO2yvogJVWkuRzqvbPIq0oe75HKkVtbuh5UmH85yH6vJh6CWTjlpi5BxCf2IGSeCTe0aC0NOqEAnqhy8EA__", background: "#F2FCE4" },
        { title: "Headphones", itemCount: 33, image: "https://s3-alpha-sig.figma.com/img/0ed9/44fa/3bcccc269ae2cadb2fb25ac9b02ea29e?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=mfXzvZiXUlkheYXqQ4ckPRfoQFlC4~tHj-4fEqGaZ-ckHLDJQTGy1Lox3iZK9RicB~FTWbuqf-Btz6hc~zfRLA-vOMMhxPHLKB1WuzoaNQkPH0iFFnWQievRk~SQkWOI8CVG-6eMS0tJgdABt4sb3A4e8qrndf7yPhSIopU8FGUaITh1cNE1IN3K2dCBYwLrFn6pnnAygPLtGuetTJglBg~HpgADHKCd74em3XbFTWv72okpzmPjrmI~e60hMc3ftXmdKLF5MW30SOHbQdt1iLJP1KEcXBsETStBeSNQOdpb8i0YTRMOE0A2d51j~kf3Scb6jl7hEDTwAr7RX6k9ow__", background: "#FFFCEB" },
        { title: "Cake & Milk", itemCount: 54, image: "https://s3-alpha-sig.figma.com/img/78c4/8886/688817c7c490b88407c4904743141184?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Gpz2CLb5YXkMpN4TKxg3UlkAafhlNgHdDpYZYzcu6s2lR1BwTaBqsyzsY5UKX2SvHqagl6boSTwcViYmgMynwwftDQxDW0AlgcbmOqaBF9pXH5SkG0qL2glXYLA1hzEI30zjlSXmOE1z5V-gM3gP3AwoUqun5-Sjamd-k0YjxC-9tDelRJ8kHfqoGOb2z4Hay4HLLEcY4anWxr~jKI3MPuO7jI4WEEUXqCKy1w5yNZNM35mEJzd69NTXIlSf4FD94IoJyhz5C8xlnyMlQqySr3zZZLmytKd36SaG9gxNZpr0pOZoJ1YCKM~yEHNe3CqykN6GiDNMkmQmSslkMBZzBw__", background: "#F2FCE4" },
        { title: "Orange", itemCount: 63, image: "https://s3-alpha-sig.figma.com/img/aadc/a20d/2ca905cbdfec3bf306fbe70e1ca34a8a?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=d~k-tHXp6fMgbGU1~c7IO1DB~zoh-jNp8FMpVUGZ8tG2stZulHo9uQH65GpqTTmWALbdsODjmWsRI3mEVaGMQ8nK185N2Uuk-jVuYjtl3zSfV3upAvlIEFaQYt-dR7PDou1vn7QAbgbGheGl44FAVNMv6ZHQATJiH2GgdScdaVpG1xFye9Bu5PQj93lqw-SNBDzbuaqf4g4rkYph0namArL3mYX1K13EtaGyz8P4V045OgYt-9C96dzL338uogMj1FluIqqU17sZqJM957qEo4OXFMTRPNAJrxRe166uLb1KJe1Eo4T6DOQXyTwWtU8jE3v1v5p3LfUgJF9o3uy5wg__", background: "#FFF3FF" },
      ],

      Promotion1_Components: [
        { title: "Everyday Fresh & Clean with Our Products", image: "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=T40e9~Jrk41vIxQLYv1CJzyLd1F9vV-JaVtPCtGv9UjXmpdwz-LEkmuMiTL~zHlNX13lRp52TKIdRgWfSFIbFFHTkvh2EEpzL~C69AqL2kPTQh5TCO1WGkRwI~KX~BKTN35AZdXwBsniBUR7RJP44P1HcDeHlOD4VLpveXCB~bmxgkUs9XumThOU~1y3QNu0iBoXRuzu1Gd3V33X7BX0QSzZ03gdYt3rRuOlSYp6m6s5pMxvuVn-6meVSPr9cCxfePJQLieDUTDwzRx6zCEsFNseNSuC7KVUJ5XF135~T6lzfRzF6DK~BZwm4HGsDuz0r1zig7xv3gcdXroirHtbfw__", background: "#F0E8D5", buttonColor: "#3BB77E" },
        { title: "Make your Breakfast Healthy and Easy", image: "https://s3-alpha-sig.figma.com/img/2738/f29f/1c4542246febe8c91ddb74ce42b81c5d?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MRvlUE3bgBYvvz4vcCK~LbEz-EjGDMUkV3l2w6JGqjPlS8YOEReDBxm7i5pS9IRsUH3GC9alEbFIJA3-P8yUH3Arx-2urtgyCQwMRRgRrOSQD-j3S-6enzhNFs~-YjcoRH8E3~ZMIHNYkOv9pLE5nKT0uGXCP7uSMwu6IpVjveWFib-IeKgHnH2~~9A-19HczN5QfSs4KW3Gqdqtz6N62AGKXXaH9ylduwpea5FiP-vtjvNNXlsN7GP8y129EnujSR7NIp4qDatHrjNQ8KvUwwsEVBW-QVB1--tNEXcRBXc9YWfLJIqnJf-noO4Jaw9qlb8UhlcddDcNaik-WuOhWg__", background: "#F3E8E8", buttonColor: "#3BB77E" },
        { title: "The best Organic Products Online", image: "https://s3-alpha-sig.figma.com/img/4d69/6151/8879bc373bf5fcc1578bcec5172b087b?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=CwMIK0mrInwja0rebFttLencm3eRrjsXsslORjfagZOZ3euZtfDu6u6xFlztGh3p9iTM-aY5ej13DFvMcbxhKaBKAK5gA3AkjoMO3mYAqSIybWAQ9C6q0OMZwq2UBB02woKz1~0RsM8BqsAlCDLKphdvXDgGhLMRJeT0CXIme3Wxqo4yPPeFB05dXEtst7rEZAdC4HsNdkOQA4Wy4y9ixu9peeGFqAEQTtd9~d5t8mMll7~H7gCg3OmeU~sgMD1w-MhfXd8pCcYWxC7ToCwS~EyGynWLd2hgz5PAJj75qG2kKbBN-say0EjGVi-grzbyiEJA05~PziUps1gmYnjaNQ__", background: "#E7EAF3", buttonColor: "#FDC040" },
      ],
    };
  },
};
</script>

<style scoped>
.app {
  padding: 20px;
}

.CategorySection {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 40px;
}

.Promotion1Section {
  display: flex;
  gap: 20px;
  justify-content: center;
}
.promotion-wrapper {
  position: relative;
  display: inline-block; 
}

.overlay-button {
  position: absolute;
  bottom: 48px; 
  left: 38px;
}
</style>
