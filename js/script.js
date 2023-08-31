const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')
  nav.classList.toggle('flex')
  nav.classList.toggle('hidden')
})


////////////////////////////////////////////////////////
//Bücher
// Book Class: Represents a Book
class Book {
  constructor(title, author, isbn) {
    this.title = title;
    this.author = author;
    this.isbn = isbn;
  }
}

// UI Class: Handle UI Tasks
class UI {
  static displayBooks() {
    const books = Store.getBooks();

    books.forEach((book) => UI.addBookToList(book));
  }

  static addBookToList(book) {
    const list = document.querySelector('#book-list');

    const row = document.createElement('tr');

    row.innerHTML = `
      <td>${book.title}</td>
      <td>${book.author}</td>
      <td>${book.isbn}</td>
      <td><a href="#" class="btn btn-danger btn-sm delete">X</a></td>
    `;

    list.appendChild(row);
  }

  static deleteBook(el) {
    if(el.classList.contains('delete')) {
      el.parentElement.parentElement.remove();
    }
  }

  static showAlert(message, className) {
    const div = document.createElement('div');
    div.className = `alert alert-${className}`;
    div.appendChild(document.createTextNode(message));
    const container = document.querySelector('.container');
    const form = document.querySelector('#book-form');
    container.insertBefore(div, form);

    // Vanish in 3 seconds
    setTimeout(() => document.querySelector('.alert').remove(), 3000);
  }

  static clearFields() {
    document.querySelector('#title').value = '';
    document.querySelector('#author').value = '';
    document.querySelector('#isbn').value = '';
  }
}

// Store Class: Handles Storage
class Store {
  static getBooks() {
    let books;
    if(localStorage.getItem('books') === null) {
      books = [];
    } else {
      books = JSON.parse(localStorage.getItem('books'));
    }

    return books;
  }

  static addBook(book) {
    const books = Store.getBooks();
    books.push(book);
    localStorage.setItem('books', JSON.stringify(books));
  }

  static removeBook(isbn) {
    const books = Store.getBooks();

    books.forEach((book, index) => {
      if(book.isbn === isbn) {
        books.splice(index, 1);
      }
    });

    localStorage.setItem('books', JSON.stringify(books));
  }
}

// Event: Display Books
document.addEventListener('DOMContentLoaded', UI.displayBooks);

// Event: Add a Book
document.querySelector('#book-form').addEventListener('submit', (e) => {
  // Prevent actual submit
  e.preventDefault();

  // Get form values
  const title = document.querySelector('#title').value;
  const author = document.querySelector('#author').value;
  const isbn = document.querySelector('#isbn').value;

  // Validate
  if(title === '' || author === '' || isbn === '') {
    UI.showAlert('Please fill in all fields', 'danger');
  } else {
    // Instatiate book
    const book = new Book(title, author, isbn);

    // Add Book to UI
    UI.addBookToList(book);

    // Add book to store
    Store.addBook(book);

    // Show success message
    UI.showAlert('Book Added', 'success');

    // Clear fields
    UI.clearFields();
  }
});

// Event: Remove a Book
document.querySelector('#book-list').addEventListener('click', (e) => {
  // Remove book from UI
  UI.deleteBook(e.target);

  // Remove book from store
  Store.removeBook(e.target.parentElement.previousElementSibling.textContent);

  // Show success message
  UI.showAlert('Book Removed', 'success');
});


////////////////////////////////////////////////////////
//About_Us
$(document).ready(function() {
  $(".md-content").append("<div></div>");
  var mailAddress = new Array("yavar.rassuli@gmail.com", "martin.zuberbuehler@gmail.com");
  var phoneNumber = new Array("t_nummer");
  var webSite = new Array("WebSeite");
  var currentPerson, personAddress, personPhoneNumber, personWebSite;
  $('#amazingTeam  .ch-info-back a').on("click", function() {
      $('.md-overlay').addClass('md-overlay-show');
      $('.md-modal').addClass('md-show');
      $('md-content', '.md-modal').addClass('md-show.md-effect-9 .md-content');
      var $h3SelectName = $(this).closest('.section4_article').find(this + " > h3").html();
      var $selectParentContent = $(this).closest('.article_center4').find(".md-content div");
      $('#appendDiv').remove();
      currentPerson = $(this).attr('id');
      switch (currentPerson) {
          case "idPerson1":
              personAddress = mailAddress[0];
              personPhoneNumber = phoneNumber[0];
              personWebSite = webSite[0];
              break;
          case "idPerson2":
              personAddress = mailAddress[1];
              personPhoneNumber = phoneNumber[1];
              personWebSite = webSite[1];
              break;
          case "idPerson3":
              personAddress = mailAddress[2];
              personPhoneNumber = phoneNumber[2];
              personWebSite = webSite[2];
              break;
      }
      var textToInsert = [];
      var i = 0;
      textToInsert[i++] = '<div id="appendDiv">';
      textToInsert[i++] = '<p></p>';
      textToInsert[i++] = '<ul><li><strong>Mail:</strong>';
      textToInsert[i++] = personAddress + '</li><li><strong>Phone number:</strong>';
      textToInsert[i++] = personPhoneNumber + '</li><li><strong>Website:</strong><a>';
      textToInsert[i++] = personWebSite + '</a></li></ul><button class=".md-close">Close me</button><div>';
      $($selectParentContent).append(textToInsert.join(''));
      $(".md-content > div p").text($h3SelectName);
      return false;
  });

  $('div', '.md-content').on("click", "button", function() {
      removeModalViewClass();
      return false;
  });

  $('.md-overlay').on("click", function() {
      removeModalViewClass();
      return false;
  });

  function removeModalViewClass() {
      $('.md-overlay').removeClass('md-overlay-show');
      $('.md-modal').removeClass('md-show');
      $('.md-modal md-content').removeClass('md-show.md-effect-9 .md-content');
  }

  /*****************************************************************/


  /* AUTHOR LINK */
   $('.about-me-img').hover(function(){
          $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
      }, function(){
          $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
      });

});

Resources