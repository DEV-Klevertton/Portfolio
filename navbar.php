<nav class="navbar ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" onclick="toggleMenu()">
        <span class="navbar-toggler-icon bi bi-list"></span>
      </button>
    </div>
  </nav>



  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_form_title">Delete Favorite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_delete">
                <div class="modal-body" id="mb_content">
                    Do you want to delete from Favorites?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="removeFavorite" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_form_title">Add Favorite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_add">
                <div class="modal-body" id="mb_content">
                    Do you want to add to the Favorites?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addFavorite" class="btn btn-danger" data-bs-dismiss="modal">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>