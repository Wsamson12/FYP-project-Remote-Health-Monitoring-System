let menu = document.querySelector('#Serviecs-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
  if(window.scrollY > 60){
    document.querySelector('#scroll-top').classList.add('active');
  }else{
    document.querySelector('#scroll-top').classList.remove('active');
  }
}

// 获取搜索按钮和输入框的引用
var searchButton = document.getElementById("searchButton");
var searchInput = document.getElementById("searchInput");

// 添加点击事件监听器
searchButton.addEventListener("click", function(event) {
  event.preventDefault(); // 阻止表单提交
  var searchText = searchInput.value;
  console.log("搜索内容：" + searchText);
  // 可以在这里执行搜索相关的操作
});

const imageLinks = document.querySelectorAll('.image-link');

imageLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = this.getAttribute('href');
  });
});