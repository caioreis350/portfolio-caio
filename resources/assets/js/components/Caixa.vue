<template>
  <div
    class="small-box"
    v-bind:style="defineCor"
  >
    <div class="inner">
      <h3>{{qtd}}</h3>

      <p>{{titulo}}</p>
    </div>
    <div class="icon">
      <i
        v-bind:class="icone""></i>
    </div>
    <a
      v-bind:href="
        url"
        class="
        small-box-footer"
      >{{nome_link}} <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</template>

<script>
export default {
  props: ['qtd', 'titulo', 'url', 'cor', 'icone', 'nome_link'],
  computed: {
    defineCor: function () {
      return "background-color: " + this.cor + " !important;"
    }
  }
}

</script>

<style>
.bg-aqua {
  background-color: #00c0ef !important;
}

.small-box {
  border-radius: 2px;
  position: relative;
  display: block;
  margin-bottom: 20px;
  box-shadow: 0 1px 1px #ffffffb4;
}

.small-box > .inner {
  padding: 10px;
}

.small-box h3,
.small-box p {
  z-index: 5;
}

.small-box h3 {
  font-size: 38px;
  font-weight: bold;
  margin: 0 0 10px 0;
  white-space: nowrap;
  padding: 0;
  color: #fff;
}

.small-box p {
  font-size: 15px;
}

p {
  margin: 0 0 10px;
  color: #fff;
}

.small-box .icon {
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
  position: absolute;
  top: -12px;
  right: 10px;
  z-index: 0;
  font-size: 90px;
  color: #fcf1f1ec;
}

.small-box:hover .icon {
  font-size: 95px;
}

.small-box > .small-box-footer {
  position: relative;
  text-align: center;
  padding: 3px 0;
  color: #fff;
  color: #fffc;
  display: block;
  z-index: 10;
  background: #0000001a;
  text-decoration: none;
}
a {
  color: #3c8dbc;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>