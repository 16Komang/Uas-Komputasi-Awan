/// < />

// Welcome to Cypress!
//
// This spec file contains a variety of sample tests
// for a todo list app that are designed to demonstrate
// the power of writing tests in Cypress.
//
// To learn more about how Cypress works and
// what makes it such an awesome testing tool,
// please read our getting started guide:
// https://on.cypress.io/introduction-to-cypress

// describe("Login Register Test", () => {
//     // context("720p resolution", () => {
//     //     beforeEach(() => {
//     //         // run these tests as if in a desktop
//     //         // browser with a 720p monitor
//     //         cy.viewport(1280, 720);
//     //     });

//     it("Register"),
//         () => {
//             cy.visit("http://127.0.0.1:8000/registerPage");

//             // cy.get("");
//         };

//     // it("Login", () => {
//     //     cy.get("#email").type("user123@gmail.com");
//     //     cy.get("#password").type("password");
//     //     cy.get("#remember").click();
//     //     cy.get(".space-y-4 > .bg-blue-700").click();
//     // });
// });
// });

Cypress.on("uncaught:exception", (err, runnable) => {
    // returning false here prevents Cypress from
    // failing the test
    return false;
});

describe("Login", () => {
    // it('Input Email Benar dan Password Salah', () => {
    //     cy.visit("http://127.0.0.1:8000/")
    //     cy.get('#username-field > .form_login').type('test@gmail.com')
    //     cy.get('#password').type('testSalah')

    //     cy.get('.btn').click()

    // });

    context("720p resolution", () => {
        const name = "usser";
        const email = "usser@gmail.com";
        const password = "password";
        beforeEach(() => {
            // run these tests as if in a desktop
            // browser with a 720p monitor
            cy.viewport(1280, 720);
        });

        it("Register Form Email Salah", () => {
            cy.visit("http://127.0.0.1:8000/registerPage");
            cy.get("#name").type(name);
            cy.get("#email").type(email);
            cy.get("#password").type(password);
            cy.get(".space-y-4 > .bg-blue-700").click();
        });
        it("Register Form Password Salah", () => {
            cy.visit("http://127.0.0.1:8000/registerPage");
            cy.get("#name").type(name);
            cy.get("#email").type(email);
            cy.get("#password").type(password);
            cy.get(".space-y-4 > .bg-blue-700").click();
        });
        it("Register Form tidak terisi", () => {
            cy.visit("http://127.0.0.1:8000/registerPage");
            cy.get(".space-y-4 > .bg-blue-700").click();
        });
        it("Register Form Terisi Sesuai", () => {
            cy.visit("http://127.0.0.1:8000/registerPage");
            cy.get("#name").type(name);
            cy.get("#email").type(email);
            cy.get("#password").type(password);
            cy.get(".space-y-4 > .bg-blue-700").click();
        });


        it("Input Email Salah dan Password Benar", () => {
            cy.visit("http://127.0.0.1:8000/loginPage");
            cy.get("#email").type("rosandy1118@gmail.com");
            cy.get("#password").type(password);
            cy.get("#remember").click();
            cy.get(".space-y-4 > .bg-blue-700").click();
        });

        it('Input Email Salah dan Password Salah', () => {
            cy.visit("http://127.0.0.1:8000/loginPage");
            cy.get("#email").type("rosandy1118@gmail.com");
            cy.get("#password").type("password123");
            cy.get("#remember").click();
            cy.get(".space-y-4 > .bg-blue-700").click();
        });

        it('Login Tanpa Inputan', () => {
            cy.visit("http://127.0.0.1:8000/loginPage");
            cy.get("#remember").click();
            cy.get(".space-y-4 > .bg-blue-700").click();
        });

        it('Login Sebagai Admin Password Salah', () => {
            cy.visit("http://127.0.0.1:8000/loginPage");
            cy.get("#email").type("none@gmail.com");
            cy.get("#password").type("password123");
            cy.get("#remember").click();
            cy.get(".space-y-4 > .bg-blue-700").click();
        });

        it("Login Terisi Sesuai", () => {
            cy.visit("http://127.0.0.1:8000/logout");
            cy.visit("http://127.0.0.1:8000/loginPage");
            cy.get("#email").type(email);
            cy.get("#password").type(password);
            cy.get("#remember").click();
            cy.get(".space-y-4 > .bg-blue-700").click();
        });

        it('Login Sebagai Admin', () => {
            cy.visit("http://127.0.0.1:8000/logout");
            cy.visit("http://127.0.0.1:8000/loginPage");
            cy.get("#email").type("none@gmail.com");
            cy.get("#password").type(password);
            cy.get("#remember").click();
            cy.get(".space-y-4 > .bg-blue-700").click();
        });
    });
});
