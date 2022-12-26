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

        it('TC-TAMBAH-TEMPLATE_001 - Form Input Terisi Sempurna', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type(admin)
            cy.get('#password').type(password)
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()

            cy.get(':nth-child(4) > .relative > :nth-child(1) > .flex > .block').click()
            cy.get('#name').type('Template C')
            cy.fixture("BGUltra.jpg", { encoding: null }).as("myFixtures");
            cy.get('.mb-8 > .relative').selectFile("@myFixtures");
            cy.get('#filename').type('Test')
            cy.get('#desc').type('Testing')
            cy.get('#btn-kirim').click()
        });

        it('TC-TAMBAH-TEMPLATE_002 - Upload Gambar ekstensi lain', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type(admin)
            cy.get('#password').type(password)
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()

            cy.get(':nth-child(4) > .relative > :nth-child(1) > .flex > .block').click()
            cy.get('#name').type('Template C')
            cy.fixture("Keterangan.pdf", { encoding: null }).as("myFixtures");
            cy.get('.mb-8 > .relative').selectFile("@myFixtures");
            cy.get('#filename').type('Test')
            cy.get('#desc').type('Testing')
            cy.get('#btn-kirim').click()
        });

        it('TC-TAMBAH-TEMPLATE_003 - Form Tidak Terisi Sempurna', () => {
            cy.visit("http://127.0.0.1:8000/loginPage")
            cy.get('#email').type(admin)
            cy.get('#password').type(password)
            cy.get('#remember').click()

            cy.get('.space-y-4 > .bg-blue-700').click()

            cy.get(':nth-child(4) > .relative > :nth-child(1) > .flex > .block').click()
            cy.fixture("Keterangan.pdf", { encoding: null }).as("myFixtures");
            cy.get('.mb-8 > .relative').selectFile("@myFixtures");
            cy.get('#filename').type('Test')
            cy.get('#desc').type('Testing')
            cy.get('#btn-kirim').click()
        });

    });
})