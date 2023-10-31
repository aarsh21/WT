<?PHP
include './header.php';
?>
    <main class="d-flex align-items-center justify-content-center">
      <form
        class="p-5 bg-black text-white rounded-4 w-50 needs-validation"
        id="itemForm"
        method="post"
        enctype="multipart/form-data"
        novalidate
      >
        <h1 class="mb-4">Edit Item</h1>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input
            type="text"
            class="form-control"
            id="title"
            name="title"
            required
            oninput="validateTitle()"
          />
          <span id="titleError" class="text-danger"></span>
        </div>
        <div class="mb-3">
          <label for="chapters" class="form-label">Chapters</label>
          <input
            type="number"
            class="form-control"
            id="chapters"
            name="chapters"
            min="1"
            max="2000"
            step="1"
            required
            oninput="validateChaptersInput()"
          />
          <span id="error-message" class="text-danger"></span>
        </div>
        <div class="mb-3">
          <label for="types" class="form-label">Types</label><br />
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="types"
              id="fiction"
              value="Fiction"
              required
            />
            <label class="form-check-label" for="fiction">Manga</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="types"
              id="non-fiction"
              value="Non-Fiction"
              required
            />
            <label class="form-check-label" for="non-fiction">Manhwa</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="types"
              id="mystery"
              value="Mystery"
              required
            />
            <label class="form-check-label" for="mystery">Doujinshi</label>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Genre</label><br />
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre1"
              value="Adventure"
            />
            <label class="form-check-label" for="genre1">Adventure</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre2"
              value="Romance"
            />
            <label class="form-check-label" for="genre2">Romance</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre3"
              value="Science Fiction"
            />
            <label class="form-check-label" for="genre3">Science Fiction</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre4"
              value="Slice Of Life"
            />
            <label class="form-check-label" for="genre4">Slice Of Life</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre5"
              value="Shounen"
            />
            <label class="form-check-label" for="genre5">Shounen</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre6"
              value="Gore"
            />
            <label class="form-check-label" for="genre6">Gore</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre7"
              value="Action"
            />
            <label class="form-check-label" for="genre7">Action</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre8"
              value="Isekai"
            />
            <label class="form-check-label" for="genre8">Isekai</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="checkbox"
              name="genre[]"
              id="genre9"
              value="Time Travel"
            />
            <label class="form-check-label" for="genre9">Time Travel</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input
            type="text"
            class="form-control"
            id="author"
            name="author"
            required
            oninput="validateAuthorInput()"
          />
          <span class="text-danger" id="authorError"></span>
        </div>
        <div class="mb-3">
          <label for="languageManga" class="form-label">Language</label>
          <input
            type="text"
            class="form-control"
            id="languageManga"
            name="language"
            required
            oninput="validateLanguageInput()"
          />
          <span class="text-danger" id="languageError"></span>
        </div>
        <div class="mb-3">
          <label for="availability" class="form-label">Availability</label
          ><br />
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="availability"
              id="available"
              value="Available"
              required
            />
            <label class="form-check-label" for="available">Available</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="availability"
              id="not-available"
              value="Not Available"
              required
            />
            <label class="form-check-label" for="not-available"
              >Not Available</label
            >
          </div>
        </div>
        <div class="mb-3">
          <label for="cover-image" class="form-label">Cover Image</label>
          <input
            type="file"
            class="form-control"
            id="cover-image"
            name="cover-image"
            accept="image/*"
          />
        </div>

        <div class="mb-3">
          <label for="pdf" class="form-label">Panel</label>
          <input
            type="file"
            class="form-control"
            id="pdf"
            name="pdf"
            accept=".pdf"
          />
        </div>
        <div class="mb-3">
          <label for="synopsis" class="form-label">Synopsis</label>
          <textarea
            class="form-control"
            id="synopsis"
            name="synopsis"
            rows="4"
            required
          ></textarea>
          <div class="invalid-feedback">Please provide a valid synopsis.</div>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price (USD)</label>
          <input
            type="number"
            class="form-control"
            id="price"
            name="price"
            min="0"
            step="0.01"
            required
          />
        </div>
        <button type="submit" class="btn btn-outline-light m-3">Update</button>
        <button type="submit" class="btn btn-outline-danger m-3">Delete</button>
      </form>
    </main>

    <?PHP
include './footer.php';
?>