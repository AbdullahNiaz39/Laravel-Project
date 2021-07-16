new Vue({
	el:"#app",
	data:{
		product:"Socks",
		image:'/images/sock.jpg',
		inStock:false,
         //inventory:20,
		 onSale:true,
		 details:["80% cotton", "20% polyester", "Gender-netural"],
		 sizes: ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
		 	variants: [
	{
		variantId: 2234,
		variantColor: "green",
		variantImage:'/images/sock.jpg'
	},
	{
		variantId:2235,
		variantColor: "blue",
		variantImage:'/images/blue.jpg'
	}
	],
	 cart: 0,
	},
	methods: {
    addToCart() {
      this.cart += 1
    },
    updateProduct(variantImage) {
      this.image = variantImage
    },
    removeFromCart() {
      this.cart -= 1
    }
  }
  
})
