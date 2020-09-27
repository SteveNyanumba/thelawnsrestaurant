<template>
  <div>
      <form @submit.prevent="">
          <div class="form-group">
            <label for="test">Test</label>
            <select multiple class="form-control" name="test" id="test" v-model="test">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
      </form>
  </div>
</template>

<script>
export default {
    data(){
        return{
            test:'',
        }
    }
}
</script>

<style>

</style>
