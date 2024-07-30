#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX_BOOKS 100

struct Book {
char title[50];
char author[50];
int year;
};

struct Library {
struct Book books[MAX_BOOKS];
int count;
};

void addBook(struct Library *library, struct Book book) {
if (library->count >= MAX_BOOKS) {
printf("Library is full. Cannot add more books.\n");
return;
}library->books[library->count] = book;
library->count++;

printf("Book added successfully.\n");
}

void displayBooks(struct Library library) {
if (library.count == 0) {
printf("No books available in the library.\n");
return;
}

printf("Books in the library:\n");
for (int i = 0; i < library.count; i++) {
printf("Title: %s\n", library.books[i].title);
printf("Author: %s\n", library.books[i].author);
printf("Year: %d\n", library.books[i].year);
printf("----------------------\n");
}
}int main() {
struct Library library;
library.count = 0;

int choice;

do {
printf("Library Management System\n");
printf("1. Add Book\n");
printf("2. Display Books\n");
printf("3. Exit\n");
printf("Enter your choice: ");
scanf("%d", &choice);

switch (choice) {
case 1: {
struct Book book;
printf("Enter book title: ");
scanf("%s", book.title);
printf("Enter book author: ");
scanf("%s", book.author);
printf("Enter book year: ");
scanf("%d", &book.year);

addBook(&library, book);
break;
}case 2: {
displayBooks(library);
break;
}
case 3:
printf("Exiting...\n");
break;
default:
printf("Invalid choice. Please try again.\n");
}

printf("\n");
} while (choice != 3);

return 0;
}