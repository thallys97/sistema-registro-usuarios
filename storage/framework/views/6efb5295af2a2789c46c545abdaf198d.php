<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Home']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Home']); ?>

<main>
    <section>
      <h2 class="mb-5">Bem-vindo(a) <?php echo e($name); ?> ao Meu Website!</h2>
      <p>O seu email: <?php echo e($email); ?> está inserido no meu sistema</p>
      <p>Seja bem-vindo(a) à minha página inicial.</p>
      <p>O foco desse projeto não é deixar essa página estilizada, 
        mas sim criar uma sistema simples de registro de usuários</p>
      <p>fiz esse sistema simples 
        para desenvolver minhas habilidades com o php e a web</p>
    </section>
  </main>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>




<?php /**PATH C:\servidor\nginx\html\sistema_registro_usuario\registro-usuarios\resources\views/home/index.blade.php ENDPATH**/ ?>