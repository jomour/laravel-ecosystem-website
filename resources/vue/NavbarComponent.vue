<template>
  <div class="navbar">
    <a href="#" class="navbar-logo">LARAVEL ECOSYSTEM LANDSCAPE</a>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentActive: 'explore', // La première valeur active par défaut
    };
  },
  methods: {
    setActive(menuItem) {
      this.currentActive = menuItem;
    },
    isActive(menuItem) {
      return this.currentActive === menuItem;
    }
  }
};
</script>

<style scoped>

.navbar {
    background-color: #f8f8f8;
    border-bottom: solid 1px #e7e7e7;
    overflow: hidden;
    position: fixed;
    width: 100%;
    z-index: 1000;
    border-bottom: 1px solid #ccc;
}

.navbar a {
    float: left;
    display: block;
    color: #5c5c5c; 
    text-align: center;
    padding: 14px 16px; 
    text-decoration: none;
    font-size: 17px; 
    width: 100%;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.navbar-logo {
    float: left;
    display: block;
    color: #5c5c5c;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
}

</style>
