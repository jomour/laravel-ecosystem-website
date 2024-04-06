<template>
    <div class="tech-landscape">
      <div class="category" v-for="category in toolslist" :key="category.name">
        <h2 class="category-title">{{ category.name }}</h2>
        <div class="sub-categories">
          <div 
            class="sub-category" 
            v-for="subCategory in category.sub_categories" 
            :key="subCategory.name"
          >
            <h3 class="sub-category-title">{{ subCategory.name }}</h3>
            <div class="tools">
              <div class="tool" v-for="tool in subCategory.tools" :key="tool" @click.stop="selectTool(tool)">
                <img :src="tool.imagePath" :alt="tool.name" class="tool-image"/>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div v-if="selectedTool" ref="popup" class="popup">
        <div class="popup-card">
        <div class="popup-card-header">
            <img :src="selectedTool.imagePath" :alt="selectedTool.name" class="popup-image"/>
            <div class="popup-card-header-description">
            <h3 class="popup-title">{{ selectedTool.name }}</h3>
            <p class="popup-description">{{ selectedTool.description }}</p>
            </div>
        </div>
        <div class="popup-card-footer">
            <a :href="selectedTool.githubPath" target="_blank" class="icon-link">
            <i class="fab fa-github"></i>
            </a>
            <a :href="selectedTool.websitePath" target="_blank" class="icon-link">
            <i class="fas fa-globe"></i>
            </a>
        </div>
        <button class="popup-close" @click="selectedTool = null">×</button>
        </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      toolslist: Array // Assuming toolslist is an array based on the warning message
    },

    data() {
      return {
        categories: [
        {
                      name: "Infrastructure",
                      subCategories: [
                        {
                          name: "Official",
                          tools: [
                            { name: "Sail", imagePath: "/images/sail.png",githubUrl:"http://google.fr", websiteUrl:"http://google.fr"},
                            { name: "Deploy", imagePath: "/images/deploy.png" },
                            { name: "Test", imagePath: "/images/test.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" }
                          ]
                        },
                        {
                          name: "Product",
                          tools: [
                            { name: "Forge", imagePath: "/images/forge.png" },
                            { name: "Forge", imagePath: "/images/forge.png" },
                            { name: "Forge", imagePath: "/images/forge.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" }
                          ]
                        },
                        {
                          name: "Package",
                          tools: [
                            { name: "Forge", imagePath: "/images/forge.png" },
                            { name: "Forge", imagePath: "/images/forge.png" },
                            { name: "Forge", imagePath: "/images/forge.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" },
                            { name: "Sail", imagePath: "/images/sail.png" }
                          ]
                        },
                        // Ajoutez d'autres sous-catégories et outils selon le besoin...
                      ]
                    },

                              {
                                name: "Infrastructure",
                                subCategories: [
                                  {
                                    name: "Official",
                                    tools: ["Sail", "Deploy", "Test","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail"]
                                  },
                                  {
                                    name: "Product",
                                    tools: ["Forge", "Forge", "Forge","Sail","Sail","Sail","Sail"]
                                  },
                                  {
                                    name: "Package",
                                    tools: ["Forge", "Forge", "Forge","Sail","Sail","Sail","Sail"]
                                  },
                                  // D'autres sous-catégories ici...
                                ]
                              },
                              {
                                name: "Infrastructure",
                                subCategories: [
                                  {
                                    name: "Official",
                                    tools: ["Sail", "Deploy", "Test","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail","Sail"]
                                  },
                                  {
                                    name: "Product",
                                    tools: ["Forge", "Forge", "Forge","Sail","Sail","Sail","Sail"]
                                  },
                                  {
                                    name: "Package",
                                    tools: ["Forge", "Forge", "Forge","Sail","Sail","Sail","Sail"]
                                  },
                                  // D'autres sous-catégories ici...
                                ]
                              },
                              // D'autres catégories ici...
                            ],
        selectedTool: null
      };
    },
    methods: {
        selectTool(tool) {
        this.selectedTool = tool;
        },
        closePopup() {
        this.selectedTool = null;
        }
    },
    mounted() {        
        document.addEventListener('click', this.handleOutsideClick);
    },
    beforeDestroy() {
        document.removeEventListener('click', this.handleOutsideClick);
    },
    methods: {
        handleOutsideClick(e) {
        if (this.$refs.popup && !this.$refs.popup.contains(e.target)) {
            this.selectedTool = null;
        }
        },
        selectTool(tool) {
            console.log(tool)
            this.selectedTool = tool;
        }
    }
  };
  </script>
  
  <style scoped>
  .tech-landscape {
    display: flex;
    flex-wrap: wrap;
    background-color: #fff;
    padding:30px;
  }
  
  .category {
    display: flex;
    flex-basis: calc(50% - 10px);
    align-items: flex-start;
    margin-bottom:0.2em;
  }
  
  .category-title {
    writing-mode: vertical-lr;
    transform: rotate(180deg); /* Le texte est lu de bas en haut */
    background-color: rgba(1, 107, 204, 0.7); /* Bleu pour le titre de la catégorie */
    color: white;
    margin: 0;
    padding: 0.5em;
    height: fit-content;
    align-items:center;
    font-size: 0.9em;
    width: 40px;
    display: flex;
    justify-content: right; /* Centre le texte sur l'axe principal (verticalement dans ce cas) */
    height: 350px; /* Assure-toi que .category-title s'étend sur toute la hauteur pour aligner le texte correctement */
  }

  
  .sub-categories {
    padding-left: 0.2em;
    flex-direction: column;
    width:100%;
    margin-right:1.5em;
  }
  
  .sub-category-title {
    font-size: 1.1rem;
    background-color: #add8e6; /* Bleu clair pour le titre de la sous-catégorie */
    color: white;
    padding: 0.2em 0.5em;
    margin: 0;
    display: inline-block;
    width:100%;
  }
  
  .tools {
    display: flex;
    flex-wrap: wrap;
    padding: 1em;
  }
  
  .tool {
    margin: 0.2em;
    padding: 0.5em;
    background-color: #f8f9fa; /* Gris clair pour les outils */
    border: 1px solid #dee2e6; /* Bordure pour séparer les outils */
    white-space: nowrap;
  }

  .popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.5);
  padding:2em;
}

.popup-card-header {
    display:flex;
    width:100%;
}

.popup-card-header-description {
    margin: 1em;
    background-color: #f8f9fa;
    padding:1em;
    width:100%;
}

.popup-card {
  background-color: white;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  position: relative;
  width: 70%;
}

.popup-image {
  margin-top:1em;
  width: 60px;
  height: 60px;
  border-bottom: 1px solid #eee;
}

.popup-title {
  font-size: 1.5em;
  color: #333;
  margin-top: 15px;
}

.popup-description {
  color: #666;
  font-size: 1em;
  margin-top: 10px;
}

.popup-github {
  color: #007bff;
  display: block;
  margin-top: 15px;
  text-decoration: none;
}

.popup-close {
  position: absolute;
  top: 10px;
  right: 10px;
  border: none;
  background: transparent;
  font-size: 1.5em;
  cursor: pointer;
}

.popup-card-footer {
  display: flex;
  justify-content: center;
  padding: 10px;
}

.icon-link {
  margin: 0 10px;
  color: #333; /* Ou la couleur de votre choix */
  font-size: 1.5rem; /* Ajustez la taille de l'icône selon vos besoins */
}

.icon-link:hover {
  color: #007bff; /* Ou la couleur souhaitée au survol */
}

  </style>
  