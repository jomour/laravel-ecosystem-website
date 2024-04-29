<template>
    <div id="tech-landscape">

      <!-- FILTER SECTION-->
      <div class="search-input-container">
        <input 
          type="text" 
          class="search-input" 
          v-model="filterBy" 
          @input="search"
          placeholder="Rechercher...">
      </div>
      <div class="category" v-for="category in filteredToolList" :key="category.name">
        
          <!-- CATEGORY SECTION-->
          <h2 class="category-title">{{ category.name }}</h2>
          <div class="sub-categories">
            <div class="sub-category" v-for="subCategory in category.sub_categories" :key="subCategory.name">
              
              <!-- SUBCATEGORY SECTION-->  
              <div v-if="subCategory.tools.length > 0">
                  <h3 class="sub-category-title" >{{ subCategory.name }}</h3>
                  <div class="tools">
                    <div class="tool" v-for="tool in subCategory.tools" :key="tool" @click.stop="selectTool(tool)">
                      <img :src="tool.imagePath" :alt="tool.name" class="tool-image"/>
                    </div>
                  </div>
              </div>
              <!--END  SUBCATEGORY SECTION--> 
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
            </div> 
        </div>
        <p class="popup-description">{{ selectedTool.description }}</p>
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
      toolslist: Array
    },

    data() {
      return {
        selectedTool: null,
        filterBy: '',
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
       console.log(this.toolslist[0].sub_categories[0].tools.length)
        document.addEventListener('click', this.handleOutsideClick);
    },
    computed: {
      filteredToolList() {
        return this.toolslist.map(category => {
            return {
                ...category,
                sub_categories: category.sub_categories.map(sub_category => {
                    const filteredTools = sub_category.tools.filter(tool => {
                        return tool.name.toLowerCase().includes(this.filterBy.toLowerCase());
                    });
                    return {
                        ...sub_category,
                        tools: filteredTools
                    };
                }).filter(sub_category => sub_category.tools.length > 0)
            };
        }).filter(category => category.sub_categories.length > 0);
      }
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
            this.selectedTool = tool;
        }
    }
  };
  </script>
  
<style scoped>


.search-input-container {
  display: flex;
  align-items: center;
  margin-bottom:15px;
}

.search-input {
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  flex: 1;
  font-size: 16px;
}

  /* Desktop */
  @media screen and (min-width: 1024px) {
    #tech-landscape {
      max-width:80%;
      margin-top:20px;
    }
  }

  /* Tablette */
  @media screen and (min-width: 768px) and (max-width: 1023px) {
  }

  /* Mobile */
  @media screen and (max-width: 767px) {

  }
  
  #tech-landscape {
    background-color: #fff;
    padding:10px;
    flex-direction: column;
    border: 1px solid lightgrey;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-top:20px !important;
    margin-bottom:80px !important;
    max-width:90%;
    margin:auto;
  }

  .category {
    display: flex;
    margin-bottom:0.2em;
  }
  
  .category-title {
    writing-mode: vertical-lr;
    transform: rotate(180deg);
    background-color: rgba(1, 107, 204, 0.7);
    color: white;
    margin: 0;
    padding: 0.5em;
    height: fit-content;
    align-items:center;
    font-size: 0.9em;
    width: 40px;
    display: flex;
    justify-content: right;
    height: auto;
  }

  
  .sub-categories {
    padding-left: 0.2em;
    flex-direction: column;
    width:100%;
    margin-right:1em;
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
  justify-content: flex-start;
  margin: 5px 0 5px 10px;
}
  
.tool {
  margin: 0.2em;
  background-color: #f8f9fa; /* Gris clair pour les outils */
  border: 1px solid #dee2e6; /* Bordure pour séparer les outils */
  white-space: nowrap;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.tool-image {
  width: 60px;
  height: 60px;
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
}

.popup-card-header {
    display:flex;
    width:100%;
}

.popup-card-header-description {
    margin: 1em;
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
  margin-bottom:2em;
}

.popup-github {
  color: #007bff;
  display: block;
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
  