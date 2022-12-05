<template>
  <admin-layout>
    <v-banner class="mb-4">
      <div class="d-flex flex-wrap justify-space-between">
        <h5 class="text-h5 font-weight-bold">inicio2</h5>
        <v-breadcrumbs :items="breadcrumbs" class="pa-0"></v-breadcrumbs>
      </div>
    </v-banner>
    <v-card>
      <v-card-title>
        <v-row justify="start" class="py-4 ma-4">

          <v-text-field
            v-model="search"
            prepend-inner-icon="mdi-magnify"
            label="Pesquisar uma contratacao"
            single-line
            dense
            clearable
            hide-details
            solo
            height="100px"
            full-width
            rounded
            autofocus
            style="font-size:30px"
            v-mask="'####.###A#######.##.####'"
          />

        </v-row>
      </v-card-title>
      <v-card-text>


        <div class="d-flex flex-wrap justify-start pa-10">
              <v-card width="30%"  v-for="(tipo, i) in tipos" :key="i">
                <v-card-title class="blue white--text">
                  <span class="text-h5">{{tipo.tipo}}</span>

                  <v-spacer></v-spacer>

                  <v-menu bottom left >
                    <template v-slot:activator="{ on, attrs }">
                      <v-btn dark icon v-bind="attrs" v-on="on">
                        <v-icon>mdi-dots-vertical</v-icon>
                      </v-btn>
                    </template>

                    <v-list>
                      <v-list-item v-for="(item, i) in items2" :key="i">
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                      </v-list-item>
                    </v-list>
                  </v-menu>
                </v-card-title>

                <v-card-text>
                  <v-list-item v-for="(item, i) in items" :key="i">
                    <v-list-item-icon>
                      <v-icon v-text="item.icon"></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                      <v-list-item-title v-text="item.text"></v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-card-text>

              </v-card>

            </div>

        </v-card-text>
        </v-card
  ></admin-layout>
</template>


<script>
import AdminLayout from "../../layouts/AdminLayout.vue";
import CardContagem from "./CardContagem.vue";
export default {
  components: { AdminLayout, CardContagem },
  data() {
    return {
      breadcrumbs: [
        {
          text: "App",
          disabled: false,
          href: "/home",
        },
        {
          text: "Home",
          disabled: true,
          href: "/home",
        },
      ],
      search: null,
      items: [
        { text: "Publicadas", icon: "13" },
        { text: "Homologadas", icon: "33" },
        { text: "Revogadas", icon: "45" },
      ],
      items2: [{ title: "Novo" }, { title: "Ver todas" }],
      tipos:[
        {tipo:'Licitacao', qtd:10},
        {tipo:'Dispensa de Licitacao', qtd:10},
        {tipo:'Atas de registro de Preço', qtd:10},
        {tipo:'Adesoes', qtd:10},
      ]
    };
  },
};
</script>
