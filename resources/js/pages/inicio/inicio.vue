<template>
  <guest-layout>
    <v-app-bar color="primary" :clipped-left="false" fixed dark app>
      <v-toolbar-title v-text="appName" />
      <v-spacer />
      <Link v-if="$page.props.auth.user" :href="route('home')">
        <v-btn text>Home</v-btn>
      </Link>
      <div v-else>
        <Link :href="route('login')">
          <v-btn text>Login</v-btn>
        </Link>
        <Link :href="route('register')">
          <v-btn text>Register</v-btn>
        </Link>
      </div>
    </v-app-bar>
    <v-main>
      <v-container>
        <div class="d-flex justify-center">
          <v-card height="300" width="500">
            <v-card-title class="d-flex justify-center ma-4"
              >orgaao do usuarios</v-card-title
            >
            <v-card-text class="d-flex justify-center">
              <v-select
                :items="items"
                label="Selecione o orgao"
                outlined
              ></v-select>

            </v-card-text>
          </v-card>
        </div>
      </v-container>
    </v-main>
  </guest-layout>
</template>

<script>
import ApplicationLogo from "../../components/ApplicationLogo.vue";
import GuestLayout from "../../layouts/GuestLayout.vue";
export default {
  components: { ApplicationLogo, GuestLayout },
  data: () => ({
    items: ["SEGER", "PRODEST", "SEP", "SRSV"],
  }),
  computed: {
    appName() {
      return this.$page.props.appName;
    },
  },
};
</script>
