import {StartPage} from "@/pages/StartPage"

describe('Error pages.', () => {
  const startPage:StartPage = new StartPage();
  
  beforeEach(() => {
    startPage.visit();
    startPage.waitForPageLoaded();
  });

  it('404 status for invalid URL path', () => {
    cy.ttInvalidPath404();  
  })  
});
