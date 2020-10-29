<template>
  <div>

      <h3 class="md-title"><center>Generando estadística...</center></h3>

    <md-progress-spinner :md-diameter="100" :md-stroke="10" md-mode="indeterminate"></md-progress-spinner>

  </div>
</template>

<script>
  export default {
    name: 'ProgressBarQuery'
  }
</script>

<style lang="scss" scoped>
  .md-progress-bar {
    margin: 24px;
  }
</style>
