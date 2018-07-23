<template>
    <div>
      <div v-for="post in posts">
        <router-link  :to="post.getPath()" :key="post.getPath()">
        {{ post.getTitle() }}
        </router-link>
      </div>

    </div>
      
</template>
<script lang="ts">
import { archivePosts } from './utils';
import Component from 'vue-class-component';
import Vue from 'vue';
import { Prop } from 'vue-property-decorator';
import Page from './Page';

@Component({
  name: 'Archive',
  props: {},
})
export default class Archive extends Vue {
  get posts(): Page[] {
    return archivePosts(this.$site);
  }
}
</script>


