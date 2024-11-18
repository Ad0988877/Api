axios
  .get("https://ozarktechwebdev.com/Aydenapi/RandomApi.php")
  .then(function (response) {
    const pokemons = response.data;
    console.log(pokemons);
    let list = document.createElement("ul");
    pokemons.forEach((pokemon) => {
      let listItem = document.createElement("li");
      listItem.textContent = `${pokemon.pokeName} $ ${pokemon.pokeDex}`;
      list.appendChild(listItem);
    });
    document.getElementById("pokemon").appendChild(list);
  })
  .catch(function (error) {
    console.log(error);
  });
