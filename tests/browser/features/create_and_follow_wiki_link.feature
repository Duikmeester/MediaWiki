@chrome @clean @en.wikipedia.beta.wmflabs.org @firefox @login @phantomjs @test2.wikipedia.org
Feature: Create Page With Wiki Link

  Scenario: Create Page With Wiki Link
    Given I create page "Link Target Test Page" with content "Link Target Test Page"
      And I go to the "Link Source Test Page" page with content "This is a [[Link Target Test Page|link to the test target page]] right here."
    When I click the Link Target link
    Then I should be on the Link Target Test Page
      And the page content should contain "Link Target Test Page"
