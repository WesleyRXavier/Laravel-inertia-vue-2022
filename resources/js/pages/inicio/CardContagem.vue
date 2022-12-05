<template>
  <v-card
    class="mx-auto mb-10"
    width="300"
    height="200"
    outlined
  >
    <v-list-item three-line>
      <v-list-item-content>
        <div class="text-overline mb-4">
          {{type}}
        </div>
        <v-list-item-title class="text-h6 mb-1">
         Fase {{fase}}
        </v-list-item-title>

      </v-list-item-content>

      <v-avatar
      color="teal"
      size="40"
    >
      <span class="white--text text-h5">{{total}}</span>
    </v-avatar>
    </v-list-item>

    <v-card-actions>
      <v-btn
        outlined
        rounded
        text
        @click="$inertia.get('edital')"
      >
        Acessar
      </v-btn>
    </v-card-actions>
  </v-card>

</template>

<script>
export default {
props:['total','type','fase'],
  components: { },
  data() {
    return {

    }
  }
};
</script>
