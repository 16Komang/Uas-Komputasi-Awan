Cypress.on('uncaught:exception', (err, runnable) => {
    // returning false here prevents Cypress from
    // failing the test
    return false
})

describe('Login', () => {
    context("720p resolution", () => {
        const email = "test@gmail.com";
        const admin = "none@gmail.com";
        const password = "password";

        beforeEach(() => {
            // run these tests as if in a desktop
            // browser with a 720p monitor
            cy.viewport(1280, 720);
        });

        it('Input Email Benar dan Password Salah', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            // cy.get('#email').type('test@gmail.com')
            cy.get('#email').type(email)
            cy.get('#password').type('testSalah')

            cy.get('.space-y-4 > .bg-blue-700').click()

        });

        it('Input Email Salah dan Password Benar', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type('rosandy1118@gmail.com')
            cy.get('#password').type(password)

            cy.get('.space-y-4 > .bg-blue-700').click()

        });

        it('Input Email Salah dan Password Salah', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type('rosandy111@gmail.com')
            cy.get('#password').type('pass1234')

            cy.get('.space-y-4 > .bg-blue-700').click()

        });

        it('Login Tanpa Inputan', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('.space-y-4 > .bg-blue-700').click()

        });

        it('Login Sebagai Admin Password Salah', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type(admin)
            cy.get('#password').type('abcde')
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()

        });

        it('Form Inputan Terisi Sempurna', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type(email)
            cy.get('#password').type(password)
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()

        });

        it('Login Sebagai Admin', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type(admin)
            cy.get('#password').type(password)
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()

        });
    });
})