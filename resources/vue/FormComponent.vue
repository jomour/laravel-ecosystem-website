<template>
    <div>
        <v-dialog max-width="500">
            <template v-slot:activator="{ props: activatorProps }">
                <v-btn
                v-bind="activatorProps"
                color="surface-variant"
                text="What u need? &#x1F4A1;"
                variant="flat"
                @click="resetIdeaSubmitted"
                ></v-btn>
            </template>

            <template v-slot:default="{ isActive }">
                
                <v-card v-if="!ideaSubmitted">
                    <v-card-title class="text-center mt-5">Send me your idea &#x1F914;</v-card-title>
                    <v-card-text>
                        <form @submit.prevent="submitIdea">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" v-model="idea.title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Improvement</label>
                                <textarea id="improvement" v-model="idea.improvement" required></textarea>
                            </div>
                            <v-container class="text-center">
                                <v-btn type="submit">Send</v-btn>
                            </v-container>
                        </form>
                    </v-card-text>
                    </v-card>
                    <v-card v-else>
                        <v-card-title v-if="errorIdeaSubmitted" class="text-center ma-5">Sorry an error occured! &#x1F4A5;</v-card-title>
                        <v-card-title v-else class="text-center ma-5">Thank you for your idea! &#127881;</v-card-title>
                </v-card>
            </template>
        </v-dialog>
    </div>
  </template>
  
  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        idea: {
          title: '',
          improvement: ''
        },
        ideaSubmitted: false,
        errorIdeaSubmitted: false
      };
    },
    methods: {
        submitIdea() {
            axios.post('api/send-improvement', {
                title: this.idea.title,
                improvement: this.idea.improvement
            },{headers: { 'X-CSRF-TOKEN': window.csrfToken, 'X-Requested-With': 'XMLHttpRequest'}})
            .then(response => {
                this.ideaSubmitted = true
            })
            .catch(error => {
                this.ideaSubmitted = true
                this.errorIdeaSubmitted = true
            })
        },
        resetIdeaSubmitted() {
            this.ideaSubmitted = false
            this.errorIdeaSubmitted = false
            this.idea.title = ''
            this.idea.improvement = ''
        }
    }
  };
  </script>
  
  <style scoped>
.modal {
    padding: 20px;
    border-radius: 5px;
    background-color: #f8f8f8;
    color: #5c5c5c; 
    min-width:50%;
    z-index:5;
}
  
.modal-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* fond gris semi-transparent */
    display: flex;
    justify-content: center;
    align-items: center;
}
.modal-title {
 text-align:center;
 margin:5px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  font-weight: bold;
}
.form-group label {
    margin-bottom:5px;
}
.form-group input[type="text"],
.form-group textarea {
  width: 100%;
  padding: 8px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}
  </style>
  