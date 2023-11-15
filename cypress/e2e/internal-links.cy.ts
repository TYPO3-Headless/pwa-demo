import {StartPage} from "@/pages/StartPage"

describe('Validate links.', () => {
  const startPage:StartPage = new StartPage();

  beforeEach(() => {
    startPage.visit();
    startPage.waitForPageLoaded();  
  });
  
  it('All internal links 200', () => {
    cy.ttEveryInternalLinkStatusOk();  
  });

  it('All interla links are loading', () => {
    cy.ttEveryInternalLinkIsLoading();  
  })  
})
