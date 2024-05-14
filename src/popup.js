import { addContainer } from "./global.js";

document.getElementById('copyButton').addEventListener('click',()=>{
    const name = document.getElementById('container-name').value;
    const color = document.getElementById('conteiner-color').value;
    const txtcolor = document.getElementById('conteiner-tcolor').value;
    addContainer(name, color, txtcolor);
});