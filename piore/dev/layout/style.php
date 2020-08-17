<style media="screen">

  body {
    background:#E8F5FA;
    font-family: "Sarabun", sans-serif;
  }

  label {
    padding-left: 0px!important;
    padding-right: 6px!important;
  }

  table tr td {
    text-align: center;
  }

  /* input[type="text"]:disabled {
    background:white;
    border:1px solid #ddd;
    text-align:center;\
  } */

  table .tableBtn td {
    cursor: pointer;
    transition: 0.2s;
  }

  table .tableBtn:hover td {
    background-color: #deeefd;
  }

  input[type="radio"] {
    opacity: 0;
    position: fixed;
    width: 0;
  }

  input[type="checkbox"] {
    opacity: 0;
    position: fixed;
    width: 0;
	}

	input[type=date]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		display: none;
	}

	select{
		-webkit-appearance: none;
	}

  td input {
    text-align:center;
    border:none;
  }

  td input[type="time"]::-webkit-clear-button {
    display: none;
  }

  td input[type="date"]::-webkit-clear-button {
    display: none;
  }

  .cellWrap {
    display: table;
    width: 100%;
  }

  .cellRow {
    display: table-row;
  }

  .cells {
    display: table-cell;
    padding: 5px;
  }

  .subproductPrice {
    display: inline-block;
  }

  .borderRight {
    border-right: 1.5px solid #ddd;
  }

  .borderLeft {
    border-left: 1.5px solid #ddd;
  }

  .borderRightHalf {
    border-right: 1.5px solid #eee;
  }

  .borderLeftHalf {
    border-left: 1.5px solid #eee;
  }

  .borderBottom {
    border-bottom: 1.5px solid #ddd;
  }

  .subproductAmount {
    display: inline-block;
    position: relative;
    width: 100%;
    padding: 16px;
    font-size: 16px;
    border: 2px solid #ccc;
  }

  #subproductAmount {

  }

  .orderBtn {
    text-align: center;
    position: relative;
  }

  .btnSave {
    font-size: 22px;
    font-weight: 700;
    display: inline-block;
    position: relative;
  }

  .inlineBlock {
    display: inline-block;
  }

  #cellRowOne {
    height: 60px;
  }

  #cellOneOne {
    width: 100px;
    padding-left: 20px;
    padding-right: 0px;
    font-size: 35px;
    border-bottom: 1.5px solid Brown;
  }

  #cellOneTwo {
    width: 100%;
    padding-top: 3px;
    padding-left: 8px;
    font-size: 30px;
    border-bottom: 1.5px solid Brown;
    vertical-align: middle;
  }

  #cellAmount {
    border: 2px solid #ccc;
    border-radius: 10px;
    margin-top:16px;
    padding:16px;
    font-size: 18px;
  }

  .gridWrap {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(60px, auto);
    align-items: center
  }

  .gridOne {
    grid-column: 1 / 5;
    grid-row : 1;
  }

  #One {
    border-bottom: 1.5px solid Brown;

  }

	.form-table input {
		text-align: center;
		border: none;
	}

	.form-table select {
		text-align-last: center;
		border: none;
	}

  .radio-default input[type="radio"]:checked + label {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
  }

  .radio-primary input[type="radio"]:checked + label {
    color: #fff;
    background-color: #188ae2;
    border-color: #167ccb;
  }

  .radio-success input[type="radio"]:checked + label {
    color: #fff;
    background-color: #10c469;
    border-color: #0eac5c;
  }

  .radio-warning input[type="radio"]:checked + label {
    color: #fff;
    background-color: #f9c851;
    border-color: #f8c038;
  }

  .radio-danger input[type="radio"]:checked + label {
    color: #fff;
    background-color: #ff5b5b;
    border-color: #ff4242;
  }

  .radio-info input[type="radio"]:checked + label {
    color: #fff;
    background-color: #35b8e0;
    border-color: #21afda;
  }

  .radio-pink input[type="radio"]:checked + label {
    color: #fff;
    background-color: #ff8acc;
    border-color: #ff8acc;
  }

  .radio-purple input[type="radio"]:checked + label {
    color: #fff;
    background-color: #5b69bc;
    border-color: #5b69bc;
  }

  .radio-inverse input[type="radio"]:checked + label {
    color: #fff;
    background-color: #3b3e47;
    border-color: #3b3e47;
  }

  .radio-dark input[type="radio"]:checked + label {
    color: #fff;
    background-color: #282828;
    border-color: #282828;
  }

  .radio-deepOrange input[type="radio"]:checked + label {
    color: #fff;
    background-color: #FF5722;
    border-color: #FF5722;
  }

  .checkbox-default input[type="checkbox"]:checked + label {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
  }

  .checkbox-primary input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #188ae2;
    border-color: #167ccb;
  }

  .checkbox-success input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #10c469;
    border-color: #0eac5c;
  }

  .checkbox-warning input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #f9c851;
    border-color: #f8c038;
  }

  .checkbox-danger input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #ff5b5b;
    border-color: #ff4242;
  }

  .checkbox-info input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #35b8e0;
    border-color: #21afda;
  }

  .checkbox-pink input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #ff8acc;
    border-color: #ff8acc;
  }

  .checkbox-purple input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #5b69bc;
    border-color: #5b69bc;
  }

  .checkbox-inverse input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #3b3e47;
    border-color: #3b3e47;
  }

  .checkbox-dark input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #282828;
    border-color: #282828;
  }

  .checkbox-deepOrange input[type="checkbox"]:checked + label {
    color: #fff;
    background-color: #FF5722;
    border-color: #FF5722;
  }

  .col-3 {
    width:3%;
  }
  .col-4 {
    width:4%;
  }
  .col-5 {
    width:5%;
  }
  .col-6 {
    width:6%;
  }
  .col-7 {
    width:7%;
  }
  .col-8 {
    width:8%;
  }
  .col-10 {
    width:10%;
  }
  .col-15 {
    width:15%;
  }
  .col-20 {
    width:20%;
  }
  .col-25 {
    width:25%;
  }
  .col-30 {
    width:30%;
  }
  .col-35 {
    width:35%;
  }
  .col-40 {
    width:40%;
  }
  .col-45 {
    width:45%;
  }
  .col-50 {
    width:50%;
  }
  .col-55 {
    width:55%;
  }
  .col-60 {
    width:60%;
  }
  .col-65 {
    width:65%;
  }
  .col-70 {
    width:70%;
  }
  .col-75 {
    width:75%;
  }
  .col-80 {
    width:80%;
  }
  .col-85 {
    width:85%;
  }
  .col-90 {
    width:90%;
  }
  .col-95 {
    width:95%;
  }
  .col-100 {
    width:100%;
  }

  .imgFull {
    width: 100%;
    height: 100%;
  }

  .subproductImg {
    width: 140px;
    height: 120px;
  }

  .mw-xxs {
    min-width: 30px;
    padding: 6px 6px;
  }

  .app-md {
    height: 80px;
    width: 80px;
  }

  .widget-table > tbody > tr > td {
    text-align:center;
    padding: 6px 3px 6px 3px;
  }

  .items {
    position: absolute;
    top: 20px;
    right: 20px;
  }

  .w-xs {
    width: 30px;
    padding: 4px 8px;
  }

  .popup {
    padding-top: 0px;
  }

  .img-container {
    position: relative;
    width: 100%;
  }

  .img-container:after {
    content: "";
    display: block;
    padding-bottom: 100%;
  }

  .img-container img {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }

  .bgcolor-skyblue {
    background-color: skyblue;
    color: white;
  }
  .profileMomImage {
    margin-top: 20px;
  }
  @media (min-width: 1700px) {
    .profileMomImage {
      margin-top: 100px;
    }
  }


  /* PLUG-IN */
  .pluginVar {
    height: 40px;
    width: 400px;
    border: 1px solid #1b5ac2;
    background: #ffffff;
  }

  .pluginVarInput {
    font-size: 16px;
    width: 70%;
    height: 100%;
    padding: 10px;
    border: 0px;
    outline: none;
    float: left;
  }

  .pluginVarBtnL {
    width: 15%;
    height: 100%;
    border: 80px;
    background: #1b5ac2;
    outline: none;
    float: left;
    color: #ffffff;
  }

  .pluginVarBtnR {
    width: 15%;
    height: 100%;
    border: 80px;
    background: #1b5ac2;
    outline: none;
    float: right;
    color: #ffffff;
  }
</style>
