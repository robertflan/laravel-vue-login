<template>
  <div>
    <div class="top-right links">
      <template v-if="authenticated">
        <router-link :to="{ name: 'home' }">
          {{ $t('home') }}
        </router-link>
      </template>
      <template v-else>
        <router-link :to="{ name: 'login' }">
          {{ $t('login') }}
        </router-link>
        <router-link :to="{ name: 'register' }">
          {{ $t('register') }}
        </router-link>
      </template>
    </div>

    <div class="text-center">
      <div class="title mb-4">
        <h1>welcome to our homepage</h1>
      </div>

      <div class="links">
       
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',

  metaInfo () {
    return { title: this.$t('home') }
  },

  computed: mapGetters({
    authenticated: 'authCheck'
  }),

  data: () => ({
    title: window.config.appName
  })
}
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}
</style>
