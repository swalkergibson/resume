<?php

/*
   _____ __                        _______ __                   
  / ___// /_  ____ _____  ___     / ____(_) /_  _________  ____ 
  \__ \/ __ \/ __ `/ __ \/ _ \   / / __/ / __ \/ ___/ __ \/ __ \
 ___/ / / / / /_/ / / / /  __/  / /_/ / / /_/ (__  ) /_/ / / / /
/____/_/ /_/\__,_/_/ /_/\___/   \____/_/_.___/____/\____/_/ /_/ 

*/

namespace SanDiego\ParadiseValley\Tempe\Entrepreneur\Freelancer\AgencyDeveloper;

use Language\Server\Scripting\PHP;
use Language\Server\Scripting\Javascript as NodeJS;
use Language\Server\Scripting\Python;
use Language\Client\Scripting\Javascript as JS;
use Language\Markup\HTML;
use Language\Markup\HTML5;
use Language\Markup\CSS;
use Language\Markup\CSS3;

use Language\DB\MySQL;
use Language\DB\MSSQL;

use Framework\PHP\CakePHP;
use Framework\PHP\CodeIgniter;
use Framework\PHP\Symfony;
use Framework\PHP\PHPUnit;

use Framework\JS\Server\Express;
use Framework\JS\Client\jQuery;
use Framework\JS\Client\Backbone;
use Framework\JS\Client\Ember;
use Framework\JS\Client\Angular;

use Framework\HTML\Bootstrap;

use CMS\WordPress;
use CMS\Drupal;
use CMS\WebEdit;

use CMS\Ecommerce\AbleCommerce;
use CMS\Ecommerce\CSCart;
use CMS\Ecommerce\Magento;

use API\REST\Facebook\Connect;
use API\REST\OpenID;
use API\REST\Google\Maps;
use API\REST\Stripe;
use API\JS\Facebook\Connect;
use API\JS\Google\Maps;
use API\JS\Stripe;
use WebService\Enterprise\JDEdwards;

use Software\VCS\CVS;
use Software\VCS\Git;
use Software\VCS\SVN;

use Software\Graphics\Photoshop;
use Software\Graphics\Flash;
use Software\Graphics\GIMP;

use Software\Server\Apache;
use Software\Server\Apache2;
use Software\Server\IIS7;
use Software\Server\MySQL;
use Software\Client\MySQL;

class ShaneGibson {

    private $objective;
    private $contactInfo;
    private $education;
    private $experience;
    private $portfolio;
    private $references;

    public function getObjective()
    {
        return $this->objective;
    }

    public function setObjective($objective)
    {
        $this->objective = $objective;

        return $this;
    }

    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    public function setContactInfo($contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    public function getEducation()
    {
        return $this->education;
    }

    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    public function getPortfolio()
    {
        return $this->portfolio;
    }

    public function setPortfolio($portfolio)
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function getReferences()
    {
        return $this->references;
    }

    public function setReferences($references)
    {
        $this->references = $references;

        return $this;
    }

}

// This should definitely be in another file, but it works for a resume.

function format_date($dateString){
    return date('Y-m-d', strtotime($dateString));
}

$shane = new ShaneGibson();

$objective = 'Experienced, entrepreneurially-minded software engineer seeks ' .
             'to provide positive energy to a seasoned, ambitious team of ' .
             'professionals where learning is fostered, conventions are ' .
             'routinely shattered, and work to be proud of is produced.';
$shane->setObjective($objective);

$contactInfo = array(
    'phone' => '(480) 221-7664',
    'email' => 'swalkergibson@gmail.com',
    'address' => array(
        'street' => '4808 N. 24th Street, Unit 622',
        'city' => 'Phoenix',
        'state' => 'AZ',
        'zip' => 85016
    ),
    'social' => array(
        'facebook' => 'http://www.facebook.com/swalkergibson',
        'hackerNews' => 'https://news.ycombinator.com/user?id=swalkergibson',
        'github' => 'https://github.com/swalkergibson'
    )
);
$shane->setContactInfo($contactInfo);

$education = array(
    'college' => array(
        'start' => format_date('September, 2007'),
        'finish' => format_date('May, 2008'),
        'gpa' => 3.86,
        'relevantCourses' => array(
            'Accelerated Curriculum for Entrepreneurs',
            'Foundation Management Experience'
        ),
        'notes' => 'Took leave of absence in 2007 to pursue Defender\'s Own full-time.'
    ),
);
$shane->setEducation($education);

$experience = array(
    'Mardi Gras Costume Shop' => array(
        'start' => format_date('August, 2000'),
        'finish' => format_date('now'),
        'position' => 'Co-owner',
        'notes' => 'This is the family business. I have been involved since ' .
                   'my mother and father purchased "The Shop" in 2000. My ' .
                   'experience there includes retail sales, buying, customer ' .
                   'service, SEO, web development, point of sale system ' .
                   'development, marketing strategy, financial strategy, ' .
                   'assistant janitor, and business development.'
    ),
    'Defender\'s Own' => array(
        'start' => format_date('December, 2007'),
        'finish' => format_date('May, 2009'),
        'position' => 'Co-founder/CTO',
        'notes' => 'This was my first foray into technology entrepreneurship. ' .
                   'After having gained an interest in the technology business ' .
                   '(specifically the consumer Internet business) in my year at ' .
                   'Babson, my best friend and I started a niche social ' .
                   'networking website for active duty military, veterans, and ' .
                   'their families. At its peak, we generated 5,000 active users, ' .
                   'raised $10,000 from friends and family to build the company, ' .
                   'and cultivated a small group (perhaps 500-1000 people) of ' .
                   'rabid fans without spending a dime on advertising. We ' .
                   'leveraged SEO, content, and viral strategies to build our ' .
                   'initial user base. This is where I cemented my desire to ' .
                   'hone my programming craft and throw myself entirely into ' .
                   'the realm of software engineering and technology entrepreneurship.' .
                   'Regrettably, the business ended unceremoniously when my business ' .
                   'partner and I determined that there was not enough revenue ' .
                   'potential in the niche consumer Internet space and decided ' .
                   'to shut down after entertaining a couple of acquisition ' .
                   'offers that ultimately did not get done.'
    ),
    'Fat Kids Web Services' => array(
        'start' => format_date('May, 2009'),
        'finish' => format_date('January, 2011'),
        'position' => 'Co-founder/CTO',
        'notes' => 'Upon shutting down Defender\'s Own, my business partner ' .
                   'and I began to leverage our collective development, ' .
                   'Internet marketing, SEO, and sales experience to begin ' .
                   'our own freelance consulting business specializing in ' .
                   'website development, SEO, and Internet marketing. Fat ' .
                   'Kids gave me the opportunity to hone my project management, ' .
                   'client services, and technology sales craft. It taught ' .
                   'me that I should price projects based on the value of ' .
                   'the technology brought to the table, not just how many ' .
                   'hours it would take me to build.'
    ),
    'Mosaic Team' => array(
        'start' => format_date('January, 2011'),
        'finish' => format_date('March, 2012'),
        'position' => 'Software Engineer',
        'notes' => 'Mosaic Team was a small digital agency located in ' .
                   'Queen Creek, AZ. I earned this position through a chance ' .
                   'meeting with one of the agency\'s principals at a ' .
                   'networking event while I was peddling the services of ' .
                   'Fat Kids Web Services. The job included updating ' .
                   'existing client sites, project management, estimating, ' .
                   'and working as a member of a talented team.'
    ),
    'Dakar, Inc.' => array(
        'start' => format_date('June, 2012'),
        'finish' => format_date('now'),
        'position' => 'Technology Consultant',
        'notes' => 'Technology consultation for a high net-worth individual ' .
                   'relating to mobile asset management and inventory ' .
                   'control across multiple locations. Entrusted with ' .
                   'estimation, software review/selection, and being ' .
                   'the on-call technology expert.'
    ),
    'Rhino (Agile|Internet) Solutions' => array(
        'start' => format_date('December, 2011'),
        'finish' => format_date('January, 2014'),
        'position' => 'Software Engineer',
        'notes' => 'This is my most significant experience to date. ' .
                   'Although I was originally hired for a short-term ' .
                   'contract (4-6 weeks), the powers that be have told me ' .
                   'to keep coming back for over two years. My duties have ' .
                   'included: lead developer, client support, project ' .
                   'management, architecture, technology selection, client SEO, ' .
                   'client marketing, design, estimation, interviewing, mentor, ' .
                   'mentee, and team member.'
    ),
    'CaregiversDirect' => array(
        'start' => format_date('February, 2014'),
        'finish' => format_date('January, 2015'),
        'position' => 'Lead Developer',
        'notes' => 'Led the re-development of a marketplace for in-home ' .
                   'caregivers. Wrote product specs, worked with client ' .
                   'to determine the feature set of the product and led ' .
                   'the development team through implementation of ' .
                   'design and QA.'
    ),
    'The Client Angel' => array(
        'start' => format_date('January, 2015'),
        'finish' => format_date('now'),
        'position' => 'Project Lead',
        'notes' => 'Sold a rebuild of an old customer relationship management ' .
                   'software product to a client. Led a development team of ' .
                   'six distributed across the world from ideation to launch ' .
                   'in July, 2016. NOTE: The registration process on the ' .
                   'live version of this website is clunky because the ' .
                   'client required it. My original spec used Stripe to ' .
                   'collect credit cards, but the client insisted.'
    ),
    'Avanti Partners' => array(
        'start' => format_date('August, 2016'),
        'finish' => format_date('August, 2016'),
        'position' => 'Technology Consultant',
        'notes' => 'Completed technology due diligence of a company targeted ' .
                   'for acquisition by a private equity investor. Key tasks ' .
                   'performed included technical documentation review, SDLC ' .
                   'review, key technology employee interviews, code ' .
                   'review, database review, infrastructure review, security ' .
                   'audit, weekly reporting, and an executive presentation ' .
                   'of findings.'
    ),
    'Office Beacon' => array(
        'start' => format_date('August, 2016'),
        'finish' => format_date('November, 2016'),
        'position' => 'VP of Software Development',
        'notes' => 'Engaged to turn around a portfolio of 60 development ' .
                   'projects that are over a year behind schedule. Managing ' .
                   'over 50 development resources, and over 100 technical ' .
                   'resources. Driving product roadmap and strategic goals ' .
                   'of the CEO and executive management team. Resetting ' .
                   'client and customer expectations based on project plans ' .
                   'instead of arbitrary dates.'
    ),
    'Moses, Inc.' => array(
        'start' => format_date('February, 2017'),
        'finish' => format_date('now'),
        'position' => 'Senior Developer',
        'notes' => 'Develop websites and web applications at client\'s ' .
                   'direction. Delivered major project for Arizona ' .
                   'Department of Revenue using the Drupal CMS on time ' . 
                   'and on budget. Created requirements documents, developed ' .
                   'technical and functional specifications, as well as ' .
                   'estimates for upcoming projects.'
    )
);
$shane->setExperience($experience);

$baseRoles = array(
    'Software Engineer',
    'Client Support'
    'Estimator',
    'System Administrator',
    'Lead Developer'
);

$managementRoles = array(
    'System Analyst',
    'Business Analyst',
    'Technical Writer',
    'Account Management',
    'Project Management',
    'Resource Management'
);

$portfolio = array(
    'Arizona Department of Revenue' => array(
        'url' => 'https://azdor.gov',
        'roles' => array($managementRoles, $baseRoles)
    ),
    'Meritage Homes' => array(
        'url' => 'http://www.meritagehomes.com',
        'roles' => $baseRoles
    ),
    'Rennection' => array(
        'url' => 'http://www.rennection.com',
        'roles' => $baseRoles,
        'notes' => 'Not yet launched to public.'
    ),
    'UMOM' => array(
        'url' => 'http://www.umom.org',
        'roles' => $baseRoles
    ),
    'Right This Minute' => array(
        'url' => 'http://www.rightthisminute.com',
        'roles' => array(
            'Software Engineer',
            'Client Support'
        )
    ),
    'Mardi Gras Costume Shop' => array(
        'url' => 'http://www.mardigrascostumeshop.com',
        'roles' => $baseRoles
    ),
    'CaregiversDirect' => array(
        'url' => 'http://www.caregiversdirect.com',
        'roles' => $baseRoles
    ),
    'The Client Angel' => array(
        'url' => 'https://app.theclientangel.com',
        'roles' => $managementRoles
    )
);
$shane->setPortfolio($portfolio);

$references = 'Available upon request.';
$shane->setReferences($references);

?>
