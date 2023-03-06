<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>New Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>New Task</h1>
   
<?= form_open("/tasks/create") ?>

</form>
  
<?= $this->endsection() ?>