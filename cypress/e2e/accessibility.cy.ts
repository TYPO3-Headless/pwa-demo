import {StartPage} from "@/pages/StartPage"

describe('Accessibility tests.', () => {
    const startPage: StartPage = new StartPage();

    beforeEach(() => {
      startPage.visit();
    });

    it('A11y tests', () => {
      cy.ttAccessibility();
    });
})
