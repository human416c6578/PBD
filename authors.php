<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="css/globals.css">
</head>
<!-- NavBar -->
<nav class="bg-gray-900 dark:bg-gray-900 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="img/play.svg" class="h-8 mr-3" alt="Book Store Logo" />
            <span class="self-center text-2xl font-semibold text-white dark:text-white whitespace-nowrap">Book Store</span>
        </a>
        <div class="flex md:order-2">

            <button id="toggleMenuButton" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 dark:text-gray-400 hover:bg-gray-700 dark:hover:bg-gray-700 focus:ring-gray-600 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-menu">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 bg-gray-800 dark:bg-gray-800 border-gray-700 dark:border-gray-700 md:bg-gray-900 md:dark:bg-gray-900">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:p-0 text-white dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 hover:text-white dark:hover:text-white md:dark:hover:bg-transparent border-gray-700 dark:border-gray-700 md:hover:text-blue-700 md:dark:hover:text-blue-500">Home</a>
                </li>
                <li>
                    <a href="authors.php" class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0 text-white bg-blue-700 md:text-blue-700 md:dark:text-blue-500" aria-current="page">Authors</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Body -->
<div class="relative flex min-h-screen flex-col overflow-hidden bg-gray-50 py-6 sm:py-12">
    <img src="img/beams.jpg" alt="" class="absolute left-1/2 top-1/2 max-w-none -translate-x-1/2 -translate-y-1/2" width="1308" />
    <div class="absolute inset-0 bg-[url(img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
    <div class="relative flex min-h-screen overflow-hidden flex-col xl:flex-row items-center xl:items-start xl:justify-around justify-start space-y-8 xl:space-y-0">
        <div class="relative flex flex-col justify-center overflow-hidden bg-gradient-to-r from-blue-500 to-red-500 rounded h-2/6 xl:w-6/12 w-full py-6 xl:px-6 px-0 z-10">
            <div class="flex flex-row justify-around mb-3">
                <div class="relative mt-3">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="authorNameSearch" class="block w-full p-2 pl-10 text-sm border rounded-lg bg-gray-700 dark:bg-gray-700 border-gray-600 dark:border-gray-600 placeholder-gray-400 dark:placeholder-gray-400 text-white dark:text-white focus:ring-blue-500 dark:focus:ring-blue-500 focus:border-blue-500 dark:focus:border-blue-500" placeholder="Search author...">
                </div>
            </div>
            <div class="not-prose relative rounded-xl overflow-hidden bg-slate-800 dark:bg-slate-800">
                <div class="absolute inset-0 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] bg-grid-slate-700/25 dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]" style="background-position: 10px 10px;"></div>
                <div class="relative rounded-xl overflow-auto no-scrollbar">
                    <div class="shadow-sm table-wrp block max-h-[600px] my-4">
                        <table class="category-table border-collapse table-fixed w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="border-b border-slate-600 dark:border-slate-600 xl:text-sm text-xs xl:text-medium p-4 pr-4 pt-2 pb-3 text-slate-200 dark:text-slate-200 text-left">id</th>
                                    <th class="border-b border-slate-600 dark:border-slate-600 xl:text-sm text-xs xl:text-medium p-4 pr-4 pt-2 pb-3 text-slate-200 dark:text-slate-200 text-left">Name</th>
                                    <th class="border-b border-slate-600 dark:border-slate-600 xl:text-sm text-xs xl:text-medium p-4 pr-4 pt-2 pb-3 text-slate-200 dark:text-slate-200 text-left">Action</th>

                                </tr>
                            </thead>
                            <tbody id="authors-body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="xl:2/12 w-8/12 relative flex items-center justify-center p-4">
            <form id="addBookForm" class="max-w-lg mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Add Author</h2>
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 dark:text-gray-400 text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500 dark:focus:ring-blue-500" required>
                </div>
                <button type="button" onclick="addAuthor()" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 dark:focus:ring-blue-500">Add Author</button>
            </form>
        </div>
    </div>
</div>



</html>

<script>
    const nameSearchInput = document.getElementById("authorNameSearch");

    nameSearchInput.addEventListener("input", function() {
        fetchAuthors(nameSearchInput.value);
    });


    // Add this function to populate the Authors table
    function populateAuthorsTable(authors) {
        const authorsTableBody = document.querySelector('#authors-body');
        authorsTableBody.innerHTML = '';

        if (!authors.length) {
            return;
        }

        const tdClasses = 'border-b border-slate-700 dark:border-slate-700 p-4 pr-4 xl:text-sm text-xs xl:text-medium text-slate-400 dark:text-slate-400';

        for (const author of authors) {
            const row = document.createElement('tr');

            const idCell = document.createElement('td');
            idCell.className = tdClasses;
            idCell.textContent = author.authorId;
            row.appendChild(idCell);

            const nameCell = document.createElement('td');
            nameCell.className = tdClasses;
            nameCell.textContent = author.authorName;
            row.appendChild(nameCell);

            const deleteCell = document.createElement('td');
            deleteCell.className = tdClasses;

            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.className = 'bg-red-500 text-white px-2 py-1 rounded';
            deleteButton.addEventListener('click', function() {
                deleteAuthor(author.authorId);
            });

            deleteCell.appendChild(deleteButton);
            row.appendChild(deleteCell);

            authorsTableBody.appendChild(row);
        }
    }

    function fetchAuthors(name) {
        // URL to your PHP script
        const url = 'api/get_authors.php';
        const authorDropdown = document.getElementById('author');

        // Create an object with the search criteria
        const data = {
            name: name,
        };

        // Send a POST request to the PHP script
        fetch(url, {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(authors => {
                populateAuthorsTable(authors);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function deleteAuthor(authorId) {
        const url = 'api/handle_authors.php';

        // Send a DELETE request to the PHP script with the book ID
        fetch(url, {
                method: 'DELETE',
                body: JSON.stringify({
                    authorId: authorId
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(response => {
                console.log(response);
                // Refresh the table after deletion
                fetchAuthors(nameSearchInput.value);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function addAuthor() {
        const nameInput = document.getElementById('name');

        const authorName = nameInput.value;
    
        // Validate the form fields
        if (!authorName ) {
            alert('Please fill in all the fields and provide a valid stock value.');
            return;
        }

        const url = 'api/handle_authors.php';

        // Send a POST request to the PHP script to add the book
        fetch(url, {
                method: 'POST',
                body: JSON.stringify({
                    authorName: authorName,
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(response => {
                console.log(response);
                // Refresh the table after adding a new book
                fetchAuthors(nameSearchInput.value);
                // Clear the form fields
                nameInput.value = '';
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }



    window.onload = function() {
        fetchAuthors("");
    };

    const toggleMenuButton = document.getElementById('toggleMenuButton');
    const collapseContent = document.getElementById('navbar-menu');

    toggleMenuButton.addEventListener('click', () => {
        if (collapseContent.style.display === 'none' || collapseContent.style.display === '') {
            collapseContent.style.display = 'block';
        } else {
            collapseContent.style.display = 'none';
        }
    });
</script>