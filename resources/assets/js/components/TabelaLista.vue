<template>
  <div>
    <a
      v-if="criar"
      v-bind:href="criar"
      class="btn btn-primary active"
    ><i
        class="glyphicon glyphicon-plus"
        aria-hidden="true"
      ></i></a>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-for="titulo in titulos">{{titulo}}</th>
          <th v-if="ver || editar || deletar">Ação</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="
            (item,index)
            in
            itens">
          <td v-for="i in item">{{i}}</td>
          <td v-if="ver || editar || deletar">
            <form
              v-bind:id="index"
              v-if="deletar && token"
              v-bind:action="deletar"
              method="post"
            >
              <input
                type="hidden"
                name="_method"
                value="DELETE"
              >
              <input
                type="hidden"
                name="_token"
                v-bind:value="token"
              >
              <a
                v-if="ver"
                v-bind:href="ver"
                class="btn btn-primary active"
              ><i
                  class="fa fa-eye"
                  aria-hidden="true"
                ></i></a>
              <a
                v-if="editar"
                v-bind:href="editar"
                class="btn btn-primary active "
              ><i
                  class="fa fa-pencil"
                  aria-hidden="true"
                ></i></a>
              <a
                v-if="deletar"
                v-bind:href="deletar"
                class="btn btn-primary active "
              ><i
                  class="fa fa-trash"
                  aria-hidden="true"
                ></i></a>
              <a
                href="#"
                v-on:click="executaForm(index)"
              ></a>
            </form>
            <span v-if="!token">
              <a
                v-if="ver"
                v-bind:href="ver"
                class="btn btn-primary active"
              ><i
                  class="fa fa-eye"
                  aria-hidden="true"
                ></i></a>
              <a
                v-if="editar"
                v-bind:href="editar"
                class="btn btn-primary active "
              ><i
                  class="fa fa-pencil"
                  aria-hidden="true"
                ></i></a>
              <a
                v-if="deletar"
                v-bind:href="deletar"
                class="btn btn-primary active "
              ><i
                  class="fa fa-trash"
                  aria-hidden="true"
                ></i></a>
            </span>
            <span v-if="token && !deletar">
              <a
                v-if="ver"
                v-bind:href="ver"
                class="btn btn-primary active"
              ><i
                  class="fa fa-eye"
                  aria-hidden="true"
                ></i></a>
              <a
                v-if="editar"
                v-bind:href="editar"
                class="btn btn-primary active "
              ><i
                  class="fa fa-pencil"
                  aria-hidden="true"
                ></i></a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ['titulos', 'itens', 'criar', 'ver', 'editar', 'deletar', 'token'],
  methods: {
    executaForm: function (index) {
      document.getElementById(index).submit();
    }
  }
}
</script>
