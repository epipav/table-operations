export default {
    data() {
        return {
            passphrase:''
        }
      },
      methods: {
          login(){
                if(this.passphrase === "mypass"){
                    this.$emit("authenticated", true);
                    this.$router.replace({ name: "table" });
                }
                else{
                    console.log("passphrase wrong!");
                }
          }
      },
      watch: {
          passphrase(newValue){
              this.passphrase = newValue;

          }
      }

}