var Vue = require('vue');

Vue.use(require('vue-resource'));
var API = 'http://localhost:8000/';
// var API = 'http://localhost/learning/laravel-url-shortener/public/';

// Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
	el: '#vue-app',
	data:{
		actualUrl:'',
		shortLink:'',
		urlGenerated: false,
		errorGenerating: false
	},
	methods:{
		generateUrl: function(){
			var self = this;
			this.$http.post(API+'short/store', { url: this.actualUrl } , function(response){
				console.log(response.status);
				if(response.status == "Success"){
					self.urlGenerated = true;
					self.errorGenerating = false;
					self.shortLink = response.data;
				}else{
					self.actualUrl = '';
					self.errorGenerating = true;
					self.urlGenerated = false;
				}
			});
		}
	}
});