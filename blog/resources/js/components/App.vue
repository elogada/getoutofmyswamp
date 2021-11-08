<template>
  <div id="app">
    <h2>Bayani's Computer Peripherals:</h2>
    
    <!-- Search Mechanisms -->
  <div id="sort-bar">
    <select name="sortBy" id="select" v-model="sortBy">
      <option value="alphabetically">Alphabetically</option>
      <option value="cookingTime">Price</option>
    </select>
    <button v-on:click="ascending = !ascending" class="sort-button">
      <i v-if="ascending" class="fa fa-sort-up"></i>
      <i v-else class="fa fa-sort-down"></i>
    </button>
    <input type="number" v-model="maxCookingTime" id="cooking-time-input"></input>
    <input type="text" v-model="searchValue" placeholder="Search Recipe" id="search-input"></input>
    <i class="fa fa-search"></i>
  </div>
    
  <!-- item list -->
  <div id="recipe-container">
<div class="card" v-for="recipe in filteredRecipes" :key="recipe.title">
<div class="content">
<h1 class="recipe-title">
          <img :src="recipe.img" class="recipe-image"></img> {{ recipe.title }}
</h1>
	<p>
          {{ recipe.description }}
	</p>
	<span class="ingredient-span">
	<ol class="ingredient-list">
	<li v-for="ingredient in recipe.ingredients">- {{ ingredient }}</li>
	</ol>
	</span>

        <h3>
        Price: PHP {{recipe.cookingTime}}
	</h3>

      </div>

    </div>
  </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      ascending: true,
      sortBy: 'alphabetically',
      searchValue: '',
      maxCookingTime: null,
    recipes: [
    {title: 'Philips Monitor', description: 'Widescreen Resolution Philips screen, perfect for gaming and business tasks', ingredients: ['1920x768 resolution', '16:9 or 4:3 aspect ratio', 'Widescreen-capable', '60hz'], cookingTime: 2000, img: 'https://ph-live-05.slatic.net/original/83b45fe4fb4191e2f767aeacc088d887.jpg_720x720q80.jpg_.webp'},
    {title: 'Logitech G304 Mouse', description: 'Mouse human interface device for multiple uses', ingredients: ['4-phase DPI', 'Rapid-fire alt button', '2 side alt buttons (MOUSE5 and MOUSE6)', 'Laser guidance'], cookingTime: 780, img: 'https://gameone.ph/media/catalog/product/cache/7a2235b416a1900151232a782f707140/l/o/logitech-g304.jpeg'},
    {title: 'Noise-cancelling Headset', description: 'Headset for multimedia or business calls, whichever you fancy', ingredients: ['Noise-cancelling', 'Mic is removable', 'Volume setting at the back'], cookingTime: 579, img: 'https://www.headphonesty.com/wp-content/uploads/2021/01/NCH_for_Gaming___Bose_QC_II_Gaming.jpg'},
    {title: 'Mechanical Keyboard', description: 'Mechanical keyboard for games, but can also be used for work, coding, etc', ingredients: ['Mechanical hardware keys', 'Alternate buttons', 'Keys with backlight', 'Removable keycaps'], cookingTime: 799, img: 'https://resource.logitech.com/w_420,h_420,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/k840/gallery/k840-gallery-04-new.png?v=1'},
    ]
    };
  },
  computed: {
  filteredRecipes() {
    let tempRecipes = this.recipes
    
    // Process search input
    if (this.searchValue != '' && this.searchValue) {
        tempRecipes = tempRecipes.filter((item) => {
          return item.title
            .toUpperCase()
            .includes(this.searchValue.toUpperCase())
        })
      }
      
      // Filter out by cooking time
      if (this.maxCookingTime)
      tempRecipes = tempRecipes.filter((item) => {
        return (item.cookingTime <= this.maxCookingTime)
      })
           
    // Sort by alphabetical order
        tempRecipes = tempRecipes.sort((a, b) => {
            if (this.sortBy == 'alphabetically') {
                let fa = a.title.toLowerCase(), fb = b.title.toLowerCase()
          
              if (fa < fb) {
                return -1
              }
              if (fa > fb) {
                return 1 
              }
              return 0
              
              // Sort by cooking time
            } else if (this.sortBy == 'cookingTime') {
              return a.cookingTime - b.cookingTime
        }
        })
        
        // Show sorted array in descending or ascending order
        if (!this.ascending) {
        	tempRecipes.reverse()
        }
        
        return tempRecipes
  }
}
};
</script>

<style lang="scss">
body {
  background: #20262E;
  padding: 20px;
  font-family: Helvetica;
}

#app {
  background: #fff;
  border-radius: 4px;
  padding: 20px;
  transition: all 0.2s;
}
h2 {
  font-weight: bold;
  margin-bottom: 15px;
}

h3 {
  font-weight: 600;
  font-size: 16px;
}

#recipe-container {
  display: flex;
  flex-wrap: wrap;
}

.card {
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.3) 0 5px 10px;
  margin: 10px;
  width: 40%;
}

.content {
  padding: 30px;
}

.recipte-title {
  font-size: 18px;
  font-weight: 600;
}


.ingredient-title {
  font-size: 16px;
  font-weight: 600;
  margin-top: 20px;
}

.recipe-image {
  width: 60px;
  max-height: 60px;
  padding: -10px -10px;;
}

#sort-bar {
  width: 80%;
  // height: 80px;
  margin-left: 10px;
  background-color: #f2e0c1;
  display: flex;
  flex-wrap: wrap;
  padding: 10px;
}

.sort-button {
  background-color: rgba(0,0,0,0);
  border: none;
  // height: 50px;
  height: 100%;
  width: 50px;
  &:hover {
    background-color: rgba(0,0,0, 0.2);
    cursor: pointer;
  }
}
 
  #sort-label {
    font-size: 12px;
  }

#ascending-icon {
  // height: 30px;
  height: 100%;
  width: 30px;
}

#select {
  background-color: rgba(0,0,0, 0);
  border: none;
}
  
  #cooking-time-input {
    width: 30px;
    margin-right: 10px;
  }

  #search-input {
    margin-right: 10px;
  }
</style>
