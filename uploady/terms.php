<?php
include_once 'session.php';
include_once APP_PATH . 'logic/tosLogic.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <?php include_once 'components/header.php'; ?>
  <title> <?= $st['website_name'] ?> - Terms of Service</title>
  <?php include_once 'components/css.php'; ?>
</head>

<body>
  <?php include_once 'components/navbar.php'; ?>

  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container pb-5 pt-5">
        <div class="card">
          <div class="card-header">
            Terms of Service for <?= $st['website_name'] ?>
          </div>
          <div class="card-body">
            <h3 class="card-title">Terms of Service</h3>
            <p>
              <ul>
                <li>
                  These terms are binding and apply to any use of the services by
                  you and anyone who you allow to access your data or our services.
                  By using our services you and they irrevocably agree to these
                  terms. If you do not like these terms or don&#39;t want to be
                  bound, you can&#39;t use our services. If you do not comply with
                  these terms, we reserve the right to terminate your service and
                  therefore delete your data.
                </li>
                <li>
                  We can change these terms at any time via our website. Your
                  continued use means that you agree to the changed terms.
                </li>
                <li>
                  You must maintain copies of all data stored by you on our
                  services. We do not make any guarantees that there will be no loss
                  of data or the services will be bug free. You should download all
                  data prior to termination of services.
                </li>
                <li>
                  You can&#39;t do anything that would damage, disrupt or place an
                  unreasonable burden on our website or service or anyone else&#39;s
                  use of our website, or a service including but not limited to
                  denial of service attacks or similar.
                </li>
                <li>
                  You can&#39;t infringe anyone else&#39;s intellectual property
                  (including but not limited to copyright) or other rights in any
                  data.
                </li>
                <li>
                  You can&#39;t resell or otherwise supply our services to anyone
                  else without our prior written consent.
                </li>
                <li>
                  You can&#39;t use our services :
                  <ul>
                    <li>
                      to store, use, download, upload, share, access, transmit, or
                      otherwise make available, data in violation of any law in any
                      country (including to breach copyright or other intellectual
                      property rights held by us or anyone else).
                    </li>
                    <li>
                      to send unwelcome communications of any kind (including but
                      not limited to unlawful unsolicited commercial communications)
                      to anyone.
                    </li>
                    <li>
                      to abuse, defame, threaten, stalk or harass anyone, or to harm
                      them as defined by any law in any jurisdiction.
                    </li>
                    <li>
                      to store, use, download, upload, share, access, transmit, or
                      otherwise make available, unsuitable, offensive, obscene or
                      discriminatory information of any kind.
                    </li>
                    <li>
                      to upload anything or otherwise introduce any spyware,
                      viruses, worms, trojan horses, time bombs or bots or any other
                      damaging items which could interfere with our, or anyone
                      else&#39;s, network, device or computer system.
                    </li>
                    <li>
                      to attempt to gain unauthorised access to any services other
                      than those to which you have been given express permission to
                      access.
                    </li>
                  </ul>
                </li>
                <li>
                  You are not allowed to, and you can&#39;t let anyone else use,
                  copy, alter, distribute, display, licence, modify or reproduce,
                  reverse assemble, reverse compile, communicate, share, transmit or
                  otherwise make available, any of our code, content, copyright
                  materials, intellectual property or other rights without getting
                  our permission, other than in order to use our services as
                  intended or as allowed under any open source licences under which
                  we use intellectual property provided by others.
                </li>
                <li>
                  We respect the copyright of others and require that users of our
                  services comply with copyright laws. You are strictly prohibited
                  from using our services to infringe copyright. You may not upload,
                  download, store, share, access, display, stream, distribute,
                  e-mail, link to, communicate, transmit, or otherwise make
                  available any files, data, or content that infringes any copyright
                  or other proprietary rights of any person or entity.
                </li>
                <li>
                  We reserve the right to remove data alleged to be infringing
                  without prior notice, at our sole discretion, and without
                  liability to you. In appropriate circumstances, we will also
                  terminate your account if we consider you to be a repeat
                  infringer.
                </li>
                <li>
                  We will try to give you access to our services all the time, but
                  we do not make any promises or provide you with a warranty that
                  our services will be without any faults, bugs or interruptions.
                </li>
                <li>
                  Whilst we intend that the services should be available 24 hours a
                  day, seven days a week, it is possible that on occasions the
                  website or services may be unavailable to permit maintenance or
                  other development activity to take place or be periodically
                  interrupted for reasons outside our control.
                </li>
                <li>
                  Information on our website will change regularly. We will try to
                  keep our website up to date and correct, but again, we do not make
                  any promises or guarantees about the accuracy of the information
                  on our website.
                </li>
                <li>
                  We do not warrant that the services will meet your requirements or
                  that they will be suitable for any particular purpose.
                </li>
                <li>
                  We also aren&#39;t legally responsible for:
                  <ul>
                    <li>
                      any corruption or loss of data or other content which you or
                      anyone else may experience after using services, or any
                      problems you may have when you view or navigate our website.
                    </li>
                    <li>any loss or damage if you do not follow these terms.</li>
                    <li>
                      any actions or non-actions of other people which disrupt
                      access to our services. Including the content and nature of
                      any data that you upload, access or share. The content of ads
                      appearing on our website (including links to advertisers&#39;
                      own websites) as the advertisers are responsible for the ads
                      and we don&#39;t endorse the advertisers&#39; products. The
                      content of other people&#39;s websites even if a link to their
                      website is included on our website.
                    </li>
                  </ul>
                </li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once 'components/footer.php'; ?>

  <?php include_once 'components/js.php'; ?>
</body>

</html>