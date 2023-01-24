const productClick = document.getElementById('productClick')

productClick.addEventListener('click', (evt) => {
  let product = prompt("Informe o Produto:")
  document.querySelector('#product').textContent = product;
});

// _____________________________________________________________

const millClick = document.getElementById('millClick')

millClick.addEventListener('click', (evt) => {
  let mill = prompt("Informe o N° do Mill Rollo:")
  document.querySelector('#mill').textContent = mill.toUpperCase();
});

//______________________________________________________________

const rolloClick = document.getElementById('rolloClick')

rolloClick.addEventListener('click', (evt) => {
  let rollo = prompt("Informe o N° do Rollo:")
  document.querySelector('#rollo').textContent = rollo.toUpperCase();
  document.querySelector("text").textContent = rollo.toUpperCase();
});

//______________________________________________________________

const codProdClick = document.getElementById('codProdClick')

codProdClick.addEventListener('click', (evt) => {
  let codProd = prompt("Informe código do Produto:")
  document.querySelector('#codProd').textContent = codProd.toUpperCase();
});

//______________________________________________________________

const lengthClick = document.getElementById('lengthClick')

lengthClick.addEventListener('click', (evt) => {
  let lengthM = prompt("Informe a metragem:")
  document.querySelector('#lengthM').textContent = lengthM;

  let lengthFt= (lengthM * 3.281)
  document.querySelector('#lengthFt').textContent = lengthFt;
});

//______________________________________________________________

const weightClick = document.getElementById('weightClick')

weightClick.addEventListener('click', (evt) => {
  let weightKg = prompt("Informe o Peso (Kg):")
  document.querySelector('#weightKg').textContent = weightKg;

  let weightLb= (weightKg * 2.205)
  document.querySelector('#weightLb').textContent = weightLb;
});

//______________________________________________________________

const externalSideClick = document.getElementById('externalSideClick')

externalSideClick.addEventListener('click', (evt) => {
  let externalSide = prompt("Informe o tratamento:")
  document.querySelector('#externalSide').textContent = externalSide;
});

//______________________________________________________________

const internalSideClick = document.getElementById('internalSideClick')

internalSideClick.addEventListener('click', (evt) => {
  let internalSide = prompt("Informe o tratamento:")
  document.querySelector('#internalSide').textContent = internalSide;
});

//______________________________________________________________

const widthClick = document.getElementById('widthClick')

widthClick.addEventListener('click', (evt) => {
  let widthMm = prompt("Informe a largura em (mm):")
  document.querySelector('#widthMm').textContent = widthMm;

  let widthIn= (widthMm / 25.4)
  document.querySelector('#widthIn').textContent = Math.round(widthIn);
});

//______________________________________________________________

const dateClick = document.getElementById('dateClick')

dateClick.addEventListener('click', (evt) => {
  let date = prompt("Informe a data:")
  document.querySelector('#date').textContent = date;
});

//______________________________________________________________

const customerIdReferenceClick = document.getElementById('customerIdReferenceClick')

customerIdReferenceClick.addEventListener('click', (evt) => {
  let customerIdReference = prompt("Informe a data:")
  document.querySelector('#customerIdReference').textContent = customerIdReference;
});

//______________________________________________________________

const clientClick = document.getElementById('clientClick')

clientClick.addEventListener('click', (evt) => {
  let client = prompt("Informe o nome do Cliente:")
  document.querySelector('#client').textContent = client.toUpperCase();
});

//______________________________________________________________

const lotSapClick = document.getElementById('lotSapClick')

lotSapClick.addEventListener('click', (evt) => {
  let lotSap = prompt("Informe o Lote do SAP:")
  document.querySelector('#lotSap').textContent = lotSap.toUpperCase();
});

//______________________________________________________________

const opSapClick = document.getElementById('opSapClick')

opSapClick.addEventListener('click', (evt) => {
  let opSap = prompt("Informe o Lote do SAP:")
  document.querySelector('#opSap').textContent = opSap.toUpperCase();
});