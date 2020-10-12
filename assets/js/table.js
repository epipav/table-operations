import Axios from "axios";
export default {
  data() {
    return {
      perPage: 10,
      currentPage: 1,
      items: [],
      search: '',
      table: []
    }
  },
  mounted() {
    console.log("is auth?")

    
    Axios.get('/api/tables')
      .then(response => {
        /*
        if (response.data["success"]) {
          this.result_matrix = this.generateString(response.data["result_stringified"]);
        }
        else {
          this.backend_error = response.data["error"];
        }
        */
        this.items = response.data["data"];
        /*let tableElement = document.querySelector("div[data-table]");
        let table = JSON.parse(tableElement.dataset.table);*/
        this.table = response.data["data"];
      });


  },
  computed: {
    rows() {
      return this.items.length;
    }
  },
  watch: {
    perPage(newValue) {
      if (newValue < 1) {
        this.perPage = 1
      }
      else {
        this.perPage = newValue;
      }
    },
    search(newValue) {
      if (newValue === '') {
        this.items = this.table;
      }
      else {
        const payload = { q: newValue };
        Axios.post('/api/search', payload)
          .then(response => {
            /*
            if (response.data["success"]) {
              this.result_matrix = this.generateString(response.data["result_stringified"]);
            }
            else {
              this.backend_error = response.data["error"];
            }
            */
            this.items = response.data["data"];
          });

      }
    }
  }
}