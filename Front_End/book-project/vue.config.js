const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  lintOnSave:true,
  devServer: {
    proxy: {
      '/user': {
        target: 'http://localhost'
      }
    }
  }
})
