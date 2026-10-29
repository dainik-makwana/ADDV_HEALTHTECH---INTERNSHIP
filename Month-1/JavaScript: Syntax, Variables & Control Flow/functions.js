async function getData() {
    const res = await fetch('https://dummyjson.com/products');
    const json = await res.json();


    console.log(json.products.length);
}

getData();