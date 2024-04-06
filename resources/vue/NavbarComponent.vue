// Dans ton fichier NavbarComponent.vue

<template>
  <div class="navbar">
    <a href="#home" class="navbar-logo">LARAVEL ECOSYSTEM LANDSCAPE</a>
    <a href="#explore" :class="{ 'active': isActive('explore') }" @click="setActive('explore')">EXPLORE</a>
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
