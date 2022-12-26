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

        it('TC_DELETE-TEMPLATE_001 - Menghapus Template yang ada', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            // cy.get('#email').type('test@gmail.com')
            cy.get('#email').type(admin)
            cy.get('#password').type(password)
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()
            cy.get(':nth-child(2) > .relative > :nth-child(1) > .flex > .block').click()
            cy.get(':nth-child(3) > .font-semibold > .flex > button > .w-6').click()
        });

    });
})