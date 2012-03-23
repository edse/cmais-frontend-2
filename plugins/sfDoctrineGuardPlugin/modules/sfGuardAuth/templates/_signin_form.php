<form id="gaia_loginform" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">

<?php if ($form->hasGlobalErrors()): ?>
  <tr>
    <td colspan="4">
      <ul class="error_list">
        <?php foreach ($form->getGlobalErrors() as $name => $error): ?>
          <li><?php echo $error ?></li>
        <?php endforeach; ?>
      </ul>
    </td>
  </tr>
<?php endif; ?>

  <table>
    <tbody>
      <?php //echo $form ?>
     
      <?php //echo $form['username']->renderRow() ?>
      <?php //echo $form['password']->renderRow(array('class' => 'email')) ?>
      <?php //echo $form['remember']->renderRow() ?>
      
        <table>
          <tr>
            <th><?php echo $form['username']->renderLabel() ?>:</th>
            <td><?php echo $form['username'] ?></td>
          </tr>
          <tr>
            <th><?php echo $form['password']->renderLabel() ?>:</th>
            <td><?php echo $form['password'] ?></td>
          </tr>
          <tr>
            <th><?php echo $form['remember']->renderLabel() ?>:</th>
            <td><?php echo $form['remember'] ?></td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="<?php echo __('Entrar', null, 'sf_guard') ?>" />
              <?php echo $form->renderHiddenFields() ?>
            </td>
          </tr>
        </table>
      
    </tbody>
    <tfoot>
      <tr>
        <td> </td>
        <td>
          
          <?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
          <?php endif; ?>

          <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
          <?php endif; ?>
        </td>
      </tr>
    </tfoot>
  </table>
</form>
